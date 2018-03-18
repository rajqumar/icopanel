<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\{Customize, Tokenstructure, Footer, Tokensale, Goals, Team, Features, Header, Background, About, Clients, Solutions, Subscribers, Roadmap};
use App\{User, Users};
use Carbon, DateTime;

class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customizePost(Request $req){

        $documents = $req->file('onepager');
        if(isset($documents) && !empty($documents)){        
        $fileName = time() . '.' . $documents->getClientOriginalExtension();
        $disk = \Storage::disk('s3');
        $moveFile = $disk->put('/whitepaper/'.$fileName, file_get_contents($documents), 'public');
        $fileUrl = \Storage::disk('s3')->url('whitepaper/'.$fileName);

            $data = array(
                'onepager' => $fileUrl,
                'page_title' => $req->page_title,
                'ico_start' => strtotime($req->ico_start),
                'softcap_days' => $req->softcap_days,
                'progress' => $req->progress,
                'marker' => $req->marker,
                'ethereum_address' => $req->ethereum_address,
                'litecoin_address'  => $req->litecoin_address,
                'ripple_address' => $req->ripple_address,
                'bitcoin_address' => $req->bitcoin_address,
                'media_head1' => $req->media_head1,
                'media_head2' => $req->media_head2,
                'media_head3' => $req->media_head3,
                'media_desc1' => $req->media_desc1,
                'media_desc2' => $req->media_desc2,
                'media_desc3' => $req->media_desc3,
                'contract_desc' => $req->contract_desc,
            );

            $res = Customize::updateOrCreate(['id' => 1], $data);

            if($res){
                return view('panel');
            }else{
                return 'Error';
            }
        }else{
            print_r('No file found');
        }
    }

    public function roadmapPost(Request $req){

        $documents = $req->file('roadmap');
        if(isset($documents) && !empty($documents)){

            $fileName = time() . '.' . $documents->getClientOriginalExtension();
            $disk = \Storage::disk('s3');
            $moveFile = $disk->put('/roadmap/'.$fileName, file_get_contents($documents), 'public');
            $fileUrl = \Storage::disk('s3')->url('roadmap/'.$fileName);

            $data = array(
                'roadmap' => $fileUrl
            );

            $res = Roadmap::updateOrCreate(['id' => 1], $data);

            if($res){
                return view('panel');
            }else{
                return 'Error';
            }
        }else{
            print_r('No file found');
        }
    }

    public function footerPost(Request $req){

        $data = array(
        'facebook'=> $req->facebook, 
        'linkedin'=> $req->linkedin, 
        'twitter'=> $req->twitter,
        'github'=> $req->github, 
        'instagram'=> $req->instagram, 
        'bitcointalk'=> $req->bitcointalk,
        'reddit'=> $req->reddit, 
        'telegram'=> $req->telegram,          
        'footerdesc' => $req->footerdesc,
        'copyright' => $req->copyright
        );

        $res = Footer::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
    }

    public function structurePost(Request $req){

        $data = array(
        'description'=> $req->description, 
        'community'=> $req->community, 
        'reserved'=> $req->reserved,
        'founders'=> $req->founders, 
        'advisors'=> $req->advisors, 
        'bounty'=> $req->bounty
        );

        $res = Tokenstructure::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
    }
    
    public function tokensalePost(Request $req){

        $data = array(
            'heading'  => $req->heading,
            'start_date' => $req->start_date,
            'hardcap'   => $req->hardcap,
            'softcap'   => $req->softcap,
            'token' => $req->token,
            'exchange_rate' => $req->exchange_rate,
            'protocol' => $req->protocol,
            'contract_address' => $req->contract_address
        );

        $res = Tokensale::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
    }

    public function goalsPost(Request $req){

        $data = array(
            'light_heading'  => $req->light_heading,
            'heading' => $req->heading,
            'para'   => $req->para,
            'token_price'   => $req->token_price,
            'participants' => $req->participants
        );

        $res = Goals::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
    }

    public function aboutPost(Request $req){

        $documents = $req->file('bgimage');
        
        if(isset($documents) && !empty($documents)){

        $fileName = time() . '.' . $documents->getClientOriginalExtension();
        $disk = \Storage::disk('s3');
        $moveFile = $disk->put('/images/'.$fileName, file_get_contents($documents), 'public');
        $fileUrl = \Storage::disk('s3')->url('images/'.$fileName);

            $data = array(
                'bg_image'   => $fileUrl,
                'heading' => $req->heading,
                'para1'   => $req->para1,
                'para2'   => $req->para2,
                'video_link' => $req->video_link
            );

        }else{
            $data = array(
                'heading' => $req->heading,
                'para1'   => $req->para1,
                'para2'   => $req->para2,
                'video_link' => $req->video_link
            );
        }

        $res = About::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
    }

    public function teamPost(Request $req){

        $imageArray = [];

        if (!empty($req->file('image1'))) {
            array_push($imageArray, 'image1');
        }
        if (!empty($req->file('image2'))) {
            array_push($imageArray, 'image2');
        }
        if (!empty($req->file('image3'))) {
            array_push($imageArray, 'image3');
        }
        if (!empty($req->file('image4'))) {
            array_push($imageArray, 'image4');
        }
        if (!empty($req->file('image5'))) {
            array_push($imageArray, 'image5');
        }
        if (!empty($req->file('image6'))) {
            array_push($imageArray, 'image6');
        }
        if (!empty($req->file('image7'))) {
            array_push($imageArray, 'image7');
        }
        if (!empty($req->file('image8'))) {
            array_push($imageArray, 'image8');
        }

        $imageUrl = [];

        for ($i=0; $i < count($imageArray); $i++) { 
            $documents = $req->file($imageArray[$i]);
            $fileName = time() . '.' . $documents->getClientOriginalExtension();
            $disk = \Storage::disk('s3');
            $moveFile = $disk->put('/team/'.$fileName, file_get_contents($documents), 'public');
            $fileUrl = \Storage::disk('s3')->url('team/'.$fileName);
            $imageUrl[$imageArray[$i]] = $fileUrl;
            //array_push($imageUrl, $fileUrl);
        }

        $data = array(
            'name1'   => $req->name1,
            'name2'   => $req->name2,
            'name3'   => $req->name3,
            'name4'   => $req->name4,
            'name5'   => $req->name5,
            'name6'   => $req->name6,
            'name7'   => $req->name7,
            'name8'   => $req->name8,
            'link1'   => $req->link1,
            'link2'   => $req->link2,
            'link3'   => $req->link3,
            'link4'   => $req->link4,
            'link5'   => $req->link5,
            'link6'   => $req->link6,
            'link7'   => $req->link7,
            'link8'   => $req->link8,
            'desc1'   => $req->desc1,
            'desc2'   => $req->desc2,
            'desc3'   => $req->desc3,
            'desc4'   => $req->desc4,
            'desc5'   => $req->desc5,
            'desc6'   => $req->desc6,
            'desc7'   => $req->desc7,
            'desc8'   => $req->desc8
        );

        if(isset($imageUrl['image1'])){
            $data['image1'] = $imageUrl['image1'];
        }
        if(isset($imageUrl['image2'])){
            $data['image2'] = $imageUrl['image2'];
        }
        if(isset($imageUrl['image3'])){
            $data['image3'] = $imageUrl['image3'];
        }
        if(isset($imageUrl['image4'])){
            $data['image4'] = $imageUrl['image4'];
        }
        if(isset($imageUrl['image5'])){
            $data['image5'] = $imageUrl['image5'];
        }
        if(isset($imageUrl['image6'])){
            $data['image6'] = $imageUrl['image6'];
        }
        if(isset($imageUrl['image7'])){
            $data['image7'] = $imageUrl['image7'];
        }
        if(isset($imageUrl['image8'])){
            $data['image8'] = $imageUrl['image8'];
        }

        $res = Team::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }   
    }

    public function solutionsPost(Request $req){

        $imageArray = [];

        if (!empty($req->file('image1'))) {
            array_push($imageArray, 'image1');
        }
        if (!empty($req->file('image2'))) {
            array_push($imageArray, 'image2');
        }

        $imageUrl = [];

        for ($i=0; $i < count($imageArray); $i++) { 
            $documents = $req->file($imageArray[$i]);
            $fileName = time() . '.' . $documents->getClientOriginalExtension();
            $disk = \Storage::disk('s3');
            $moveFile = $disk->put('/images/'.$fileName, file_get_contents($documents), 'public');
            $fileUrl = \Storage::disk('s3')->url('images/'.$fileName);
            $imageUrl[$imageArray[$i]] = $fileUrl;            
            //array_push($imageUrl, $fileUrl);
        }

        $data = array(
            'heading1'   => $req->heading1,
            'heading2'   => $req->heading2,
            'bold_para1' => $req->bold_para1,
            'bold_para2'   => $req->bold_para2,
            'light_para1' => $req->light_para1,
            'light_para2' => $req->light_para2
        );

        if(isset($imageUrl['image1'])){
            $data['image1'] = $imageUrl['image1'];
        }
        if(isset($imageUrl['image2'])){
            $data['image2'] = $imageUrl['image2'];
        }

        $res = Solutions::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
    }

    public function clientsPost(Request $req){

        $imageArray = [];

        if (!empty($req->file('client_image1'))) {
            array_push($imageArray, 'client_image1');
        }
        if (!empty($req->file('client_image2'))) {
            array_push($imageArray, 'client_image2');
        }
        if (!empty($req->file('client_image3'))) {
            array_push($imageArray, 'client_image3');
        }
        if (!empty($req->file('client_image4'))) {
            array_push($imageArray, 'client_image4');
        }
        if (!empty($req->file('client_image5'))) {
            array_push($imageArray, 'client_image5');
        }

        $imageUrl = [];

        for ($i=0; $i < count($imageArray); $i++) { 
            $documents = $req->file($imageArray[$i]);
            $fileName = time() . '.' . $documents->getClientOriginalExtension();
            $disk = \Storage::disk('s3');
            $moveFile = $disk->put('/images/'.$fileName, file_get_contents($documents), 'public');
            $fileUrl = \Storage::disk('s3')->url('images/'.$fileName);
            $imageUrl[$imageArray[$i]] = $fileUrl;            
            //array_push($imageUrl, $fileUrl);
        }

        $data = [];

        if(isset($imageUrl['client_image1'])){
            $data['client_image1'] = $imageUrl['client_image1'];
        }
        if(isset($imageUrl['client_image2'])){
            $data['client_image2'] = $imageUrl['client_image2'];
        }
        if(isset($imageUrl['client_image3'])){
            $data['client_image3'] = $imageUrl['client_image3'];
        }
        if(isset($imageUrl['client_image4'])){
            $data['client_image4'] = $imageUrl['client_image4'];
        }
        if(isset($imageUrl['client_image5'])){
            $data['client_image5'] = $imageUrl['client_image5'];
        }

        $res = Clients::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }

    }

    public function featuesPost(Request $req){
    	$response = Features::updateOrCreate(['id' => 1], $req->all());
    	if($response){
            return view('panel');
    	}else{
    		print_r('Failed');
    	}
    }

    public function icoUsersList(Request $request)
    {

        $columns = array(
            0 => 'name',
            1 => 'email',
            2 => 'eth_address'
        );

        $totalData = Users::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Users::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $posts = Users::where('name', 'LIKE', "%{$search}%")
                ->orWhere('eth_address', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = Users::where('email', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->count();
        }

        $data = array();

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $nestedData['name'] = $post->name;
                $nestedData['email'] = $post->email;
                $nestedData['eth_address'] = $post->eth_address;

                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    public function headerPost(Request $req){

        $documents = $req->file('logoUpload');
        if(isset($documents) && !empty($documents)){
        $fileName = time() . '.' . $documents->getClientOriginalExtension();
        $disk = \Storage::disk('s3');
        $moveFile = $disk->put('/sitelogo/'.$fileName, file_get_contents($documents), 'public');
        $fileUrl = \Storage::disk('s3')->url('sitelogo/'.$fileName);

        $data = array(
            'site_logo' => $fileUrl
        );

        $res = Header::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
        }else{
            print_r('No file found');
        }
    }

    public function backgroundPost(Request $req){
        $documents = $req->file('whitepaper');
        if(isset($documents) && !empty($documents)){        
        $fileName = time() . '.' . $documents->getClientOriginalExtension();
        $disk = \Storage::disk('s3');
        $moveFile = $disk->put('/whitepaper/'.$fileName, file_get_contents($documents), 'public');
        $fileUrl = \Storage::disk('s3')->url('whitepaper/'.$fileName);

        $data = array(
            'whitepaper'=> $fileUrl,
            'heading'   => $req->heading, 
            'paragraph' => $req->paragraph, 
            'btc_raised' => $req->btc_raised,
            'hardcap'   => $req->hardcap,
            'softcap'   => $req->softcap, 
            'token_worth' => $req->token_worth
        );

        $res = Background::updateOrCreate(['id' => 1], $data);

        if($res){
            return view('panel');
        }else{
            return 'Error';
        }
        }else{
            print_r('No file found');
        }
    }

    public function subscribersList(Request $request)
    {

        $columns = array(
            0 => 'email_address'
        );

        $totalData = Subscribers::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Subscribers::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $posts = Subscribers::where('email_address', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = Subscribers::where('email_address', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->count();
        }

        $data = array();

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $nestedData['email_address'] = $post->email_address;
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    public function AddAuthorization(Request $req){
        $req->all();
        return $req->username;

    }

}

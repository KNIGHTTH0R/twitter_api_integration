<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tweets extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		include_once APPPATH."libraries/twitter-oauth-php/twitteroauth.php";
		$this->load->model('SaveTweet');
	}
	
	 public function index(){
		
		$consumerKey = 'wEdCkyYqzSNZzSle8O6PbnfD1'; 
		$consumerSecret = 'IBDgBihoLxH7T2XVeT71hy2A1AsmiZ3kYy94sBTSd8rDgk0hqT'; 
		$oauthCallback = base_url().'login/';
		
		$oauth_token = '3228598200-jHRcp0Vsllh4JNnPUp3eOVs6sE5O49Pnyx29VPb';
        $oauth_token_secret = '9aopNWj3Z01DGz31G2SnPRhoUaDmmB1BNRiyvwdEjmUsR';
		$connection = new TwitterOAuth($consumerKey, $consumerSecret,$oauth_token,$oauth_token_secret); 
		$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' =>'@realDonaldTrump' , 'count' => 10));
		
			
		$this->SaveTweet->save($data['tweets']);



		$this->load->view('index.php',['data'=>$data]);
		

	
}
}
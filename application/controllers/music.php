<?php

class Music extends CI_Controller {

	public function index()
	{
		$this->main();
	}

	public function main(){
		$this->load->library('image_lib');

		$this->load->model("cat_man");
		$this->load->model("resource");

		$data['title']='Please enjoy our catalog';

		$numOf=$this->cat_man->getArt('`ID`','`active`','1','`ID`','DESC');

		for ($i=0; $i < sizeof($numOf); $i++) {

			$art=$this->cat_man->getArt('`name`, `featuredSongID`, `ID`','`ID`',$numOf[$i]->ID);

			$song=$this->cat_man->getSong('`name`, `albumID`, `ID`','`ID`',$art[0]->featuredSongID);

			$album=$this->cat_man->getAlb('`title`, `ID`','`ID`',$song[0]->albumID);

			$data['entry'][$i]['name'] = $art[0]->name;
			$data['entry'][$i]['artID'] = $art[0]->ID;
			$data['entry'][$i]['alb'] = $album[0]->ID;
			$data['entry'][$i]['mp3'] = $song[0]->ID;
		}
		$this->load->view("music", $data);
	}

	public function artist($id=NULL){
		$this->load->library('image_lib');

		$this->load->model("cat_man");
		$this->load->model("resource");

		if ($id!=NULL) {

			$art=$this->cat_man->getArt('`name`, `ID`','`ID`',$id);
			$albs=$this->cat_man->getAlb('`title`,`ID`','`artistID`',$id,'`ID`','ASC');
			$mp3=$this->cat_man->getSong('`name`,`ID`', '`artistID`', $art[0]->ID);

			$data['ID']=($art[0]->ID);
			$data['artist']=($art[0]->name);
			$data['title']=($art[0]->name);

			for ($i=0; $i < sizeof($albs); $i++) {
				$data['album'][$i]=($albs[$i]->title);
				$data['albID'][$i]=($albs[$i]->ID);
			}

			for ($i=0; $i < sizeof($mp3); $i++) {
				$data['mp3']['name'][$i]=($mp3[$i]->name);
				$data['mp3']['ID'][$i]=($mp3[$i]->ID);
			}

			$this->load->view("artistpage", $data);
		}else{

			$numOf=$this->cat_man->getArt('`ID`,`name`','`active`','1','`name`','ASC');

			$data['title']='Ordered by artist';

			for ($i=0; $i < sizeof($numOf); $i++) {
				$data['entry'][$i]['name'] = $numOf[$i]->name;
				$data['entry'][$i]['ID'] = $numOf[$i]->ID;
			}
			$this->load->view("artist", $data);
		}
	}

	public function album($id=NULL){
		$this->load->library('image_lib');

		$this->load->model("cat_man");
		$this->load->model("resource");

		if ($id!=NULL) {

			$album=$this->cat_man->getAlb('`title`,`artistID`,`ID`','`ID`',$id);
			$art=$this->cat_man->getArt('`name`','`ID`', $album[0]->artistID);
			$mp3=$this->cat_man->getSong('`name`,`ID`', '`albumID`', $album[0]->ID);
			$songs=$this->cat_man->getAllSongs($id);

			$data['title']=($album[0]->title);
			$data['ID']=($album[0]->ID);
			$data['artist']=($art[0]->name);
			$data['artID']=($album[0]->artistID);

			for ($i=0; $i < sizeof($mp3); $i++){
				$data['mp3']['name'][$i]=($mp3[$i]->name);
				$data['mp3']['ID'][$i]=($mp3[$i]->ID);
			}
			
			for ($i=0; $i < sizeof($songs); $i++){
				$data['songList'][$i]['title']=($songs[$i]->title);
				$data['songList'][$i]['active']=($songs[$i]->active);
			}

			$this->load->view("albumpage", $data);
		}else{

			$data['title']='Ordered by album';

			$this->load->model("cat_man");

			$numOf=$this->cat_man->getAlb('`ID`,`title`,`artistID`','`active`','1','`title`','ASC');

			for ($i=0; $i < sizeof($numOf); $i++) {

				$art=$this->cat_man->getArt('`name`,`ID`','`ID`',$numOf[$i]->artistID);

				$data['entry'][$i]['name'] = $art[0]->name;
				$data['entry'][$i]['artID'] = $art[0]->ID;
				$data['entry'][$i]['alb'] = $numOf[$i]->title;
				$data['entry'][$i]['albID'] = $numOf[$i]->ID;
			}
			$this->load->view("album", $data);
		}
	}

	public function song(){
		$this->load->model("cat_man");
		$this->load->model("resource");

		$data['title']='Ordered by song';

		$numOf=$this->cat_man->getSong('`ID`','`active`','1','`name`','ASC');

		for ($i=0; $i < sizeof($numOf); $i++) {

			$song=$this->cat_man->getSong('`name`, `ID`,`artistID`,`albumID`','`ID`',$numOf[$i]->ID);
			$art=$this->cat_man->getArt('`name`','`ID`',$song[0]->artistID);
			$album=$this->cat_man->getAlb('`title`','`ID`',$song[0]->albumID);

			$data['entry'][$i]['name'] = $art[0]->name;
			$data['entry'][$i]['artID'] = $song[0]->artistID;
			$data['entry'][$i]['alb'] = $album[0]->title;
			$data['entry'][$i]['albID'] = $song[0]->albumID;
			$data['entry'][$i]['song'] = $song[0]->name;
			$data['entry'][$i]['mp3'] = $song[0]->ID;
		}
		$this->load->view("song", $data);
	}

	public function radio(){
		$data['title']="Folkrider Radio";
		$this->load->view("radio", $data);
	}
}
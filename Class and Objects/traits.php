<?php



trait TraitExample{

	public function test() {
		echo "THis is traits example";
	}


}



Class MainClass{

	use TraitExample;



}

(new MainClass)->test();
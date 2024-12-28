<?php

interface Tag {
	public function setPosition($numpage);
}

public class Book implements Tag {
	private int $numpage;
	
	public function setPosition($numpage) {
		$this->numpage = $numpage;
	}
}

public class Notepad implements Tag {
	private int $numpage;
	
	public function setPosition($numpage) {
		$this->numpage = $numpage;
	}
}

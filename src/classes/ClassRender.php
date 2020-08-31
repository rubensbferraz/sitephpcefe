<?php
namespace Src\Classes;

class ClassRender{

    #propriedades
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir(){ return $this->Dir; }
    public function setDir($Dir){ return $this->Dir = $Dir; }

    public function getTitle(){ return $this->Title; }
    public function setTitle($Title){ return $this->Title = $Title; }

    public function getDescription(){ return $this->Description; }
    public function setDescription($Description){ return $this->Description = $Description; }
    
    public function getKeywords(){ return $this->Keywords; }
    public function setKeywords($Keywords){ return $this->Keywords = $Keywords; }

    #Metádo responsável por rederizar todo o Layout do site
    public function renderLayout(){
        include_once(DIRREQ."/app/view/Layout.php");
    }

    #Adiciona caracteristica  especifica  no read
    public function addHead(){
        if(file_exists(DIRREQ."/app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."/app/view/{$this->getDir()}/Head.php");
        }
    }

    #Adiciona caracteristica  especifica  no reader
    public function addHeader(){
        if(file_exists(DIRREQ."/app/view/{$this->getDir()}/Header.php")){
            include(DIRREQ."/app/view/{$this->getDir()}/Header.php");
        }
    }

    #Adiciona caracteristica  especifica  no main
    public function addMain(){
        if(file_exists(DIRREQ."/app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."/app/view/{$this->getDir()}/Main.php");
        }
    }

    #Adiciona caracteristica  especifica  no footer
    public function addFooter(){
        if(file_exists(DIRREQ."/app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."/app/view/{$this->getDir()}/Footer.php");
        }
    }
}
?>
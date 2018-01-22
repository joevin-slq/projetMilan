<?php

class Blog {
    private $id;
    private $titre;
    private $courte_description;
    private $contenu;
    private $date;

    public function getId()
    {
        return $this->id;
    }
     
    public function listeAdmin()
    {
        $ret = '<p>';
        $ret .= $this->id.'. '.$this->titre.' -- ';
        $ret .= "<a href=\"edit.php?id={$this->id}\">Modifier cet article</a>";
        $ret .= " -- <a href=\"suppr.php?id={$this->id}\">x</a>";
        $ret .= '</p>';
        return $ret;
    }

    public function liste()
    {
        $ret = '<header>';
	      $ret .= '<a href="blog.php?id=' . $this->id . '">';
			$ret .= '<img src="img/' . $this->id . '.jpg"/>';
			$ret .= '<h2>' . $this->titre . '</h2>';
			$ret .= '<time>' . $this->date . '</time>';
		  $ret .= '</a>';
          $ret .= '<p>' . $this->courte_description . '</p>';
        $ret .= '<hr/></header>';
        return $ret;
    }


    public function voir($id)
    {
    	if($this->id == $id) {
          $ret = '<header>';
			$ret .= '<img src="img/' . $this->id . '.jpg"/>';
			$ret .= '<h2>' . $this->titre . '</h2>';
			$ret .= '<time>' . $this->date . '</time>';
			$ret .= '<p>' . $this->courte_description . '</p>';
			$ret .= '<p>' . $this->contenu . '</p>';
          $ret .= '</header>';
          return $ret;
        }
        return $this->id;
    }
}

?>
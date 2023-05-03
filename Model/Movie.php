<?php 

class Movie {
  public $name;
  public $director;
  public $year;
  public $genre;
  public $before_2000;

  function __construct(string $name, string $director, int $year, string $genre,){
    $this->name = $name;
    $this->director = $director;
    $this->year = $year;
    $this->genre = $genre;

    if($year < 2000){
      $this->before_2000 = 'Si';
    } else {
      $this->before_2000 = 'No';
    }

  }
}
<?php
class Movie {
    public $title;
    public $year;
    public $director;
    public $cast;

    function __construct($_title, $_year, $_director, $_cast = []) {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->cast = $_cast;
    }

    public function getCastString() {
        return join(", ", $this->cast);
    }

}

$movies = [];

$movie1 = new Movie("Fantozzi", "1975", "Luciano Salce", ["Paolo Villaggio", "Liù Bosisio", "Plinio Fernando", "Gigi Reder"]);
$movies[] = $movie1;


$movie2 = new Movie("Il Ragazzo di Campagna", "1986", "Castellano & Pipolo", ["Renato Pozzetto", "Donna Osterbuhr", "Massimo Boldi"]);
$movies[] = $movie2;

?>

<ul>
    <?php foreach ($movies as $movie) { ?>
        <li>
            <h2>
                <?php echo $movie->title." (".$movie->year.")"; ?>
            </h2>
            <h3>
                <?php echo "di ".$movie->director; ?>
            </h3>
            <p>
                <?php echo "Cast: ".$movie->getCastString(); ?>
            </p>
        </li>
    <?php } ?>
</ul>
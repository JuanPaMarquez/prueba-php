<?php 
declare(strict_types=1);

class SuperHero 
{
  // Promote properties to constructor parameters
  // This feature is available in PHP 8.0 and later
  public function __construct(
    private string $name, 
    public array $powers, 
    public string $planet
  ) {
  }

  public function attack() 
  {
    return "¡$this->name ataca con sus poderes!"; 
  }

  public function show_all() 
  {
    return get_object_vars($this);  
  }

  public function description() 
  {
    $powers = implode(", ", $this->powers);

    return "$this->name es un superhéroe de $this->planet con poderes de $powers.";
  }

  public static function randomHero()
  {
    $names = ["Superman", "Batman", "Wonder Woman"];
    $powers = [
      ["super fuerza", "vuelo", "visión de rayos X"],
      ["habilidades de combate", "inteligencia", "tecnología avanzada"],
      ["fuerza sobrehumana", "agilidad", "luz de la verdad"]
    ];
    $planets = ["Krypton", "Gotham", "Themyscira", "Tierra"];

    $name = $names[array_rand($names)];
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    return new self($name, $power, $planet);
  }
}

// Metodo estático para crear un héroe aleatorio
$hero = SuperHero::randomHero();

// Instanciar
// $hero = new SuperHero("Superman", ["super fuerza", "vuelo", "visión de rayos X"], "Krypton");
echo $hero->description(); // Metodo publico



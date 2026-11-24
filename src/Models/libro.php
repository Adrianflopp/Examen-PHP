<?php
declare(strict_types=1);

namespace Models;

class Libro
{
    public function __construct(
        public readonly string $titulo = '',
        public readonly string $autor = '',
        public readonly string $genero = '',
        public readonly int $anio = 0,
        public readonly int $paginas = 0,
        public readonly string $portada = '',
    ) {}

    public function existe(): bool
    {
        foreach ($biblioteca as $biblio) {
            if ($biblio->titulo === $this->titulo && $biblio->autor === $this->autor){
                return true;
            }
        }
        return false;
    }
}
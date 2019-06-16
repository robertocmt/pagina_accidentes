<?php
// src/AppBundle/Twig/AppExtension.php
namespace AppBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('mayus', [$this, 'mayusculas']),
        ];
    }

    public function mayusculas($texto)
    {
        $textmayus = ucfirst($texto);
        return $textmayus;
    }
}

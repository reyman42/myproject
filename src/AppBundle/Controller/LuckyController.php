<?php
/**
 * Created by PhpStorm.
 * User: renaud
 * Date: 15/11/16
 * Time: 10:03
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route("/lucky/number2")
     */
    public function numberAction2()
    {
        for($i=0; $i<10 ; $i++)
            $number[$i] = mt_rand(0, 100);

        return $this->render('lucky/number2.php.twig', array(
            'number' => $number,
        ));
    }
}
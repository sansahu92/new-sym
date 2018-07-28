<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\ConfiguratorItems;
use App\Entity\ConfiguratorOtherItemsOptions;
use Symfony\Component\HttpFoundation\Response;


class ConfiguratorItemsController extends Controller
{
    /**
     * @Route("/configurator/items", name="configurator_items")
     */
    public function index()
    {
      $configuratorItems = $this->getDoctrine()
        ->getRepository(ConfiguratorItems::class)
        ->findAll();
      $configuratorItemsAll = $this->getDoctrine()
        ->getRepository(ConfiguratorOtherItemsOptions::class)
        ->findAll();
        return $this->render('configurator_items/index.html.twig', [
          'configurator_items' => $configuratorItems,
            'configurator_items_all' => $configuratorItemsAll,
        ]);
    }

    public function getVlaue()
    {
      $configuratorItems = $this->getDoctrine()
        ->getRepository(ConfiguratorItems::class)
        ->findAll();
      $configuratorItemsAll = $this->getDoctrine()
        ->getRepository(ConfiguratorOtherItemsOptions::class)
        ->findAll();
        return $this->render('configurator_items/index.html.twig', [
          'configurator_items' => $configuratorItems,
            'configurator_items_all' => $configuratorItemsAll,
        ]);
    }
}

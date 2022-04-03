<?php
namespace App\Controller;
use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
#[Route(['en' => '/cart','fr' => '/panier',])]
class CartController extends AbstractController
{
    // Fonction ADD
    #[Route(['en' => '/{products}/add','fr' => '/{products}/ajouter',], name: 'cart_add')]
    public function add(Products $products, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        $id = $products->getId();
        if (array_key_exists($id, $cart)){  $cart[$id]++;}
        else {  $cart[$id] =1; }
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart_show', [ 'id'=>$id,]);
    }
    // Fonction LESS
    #[Route(['en' => '/{products}/less','fr' => '/{products}/moins',], name: 'cart_less')]
    public function less(Products $products, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        $id = $products->getId();
        if (2 > $cart[$id]){unset($cart[$id]);} 
        else { $cart[$id]--;}
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart_show', [ 'id'=>$id,]);
    }
    // Fonction supprimer
    #[Route(['en' => '/{products}/del','fr' => '/{products}/suprimmer',], name: 'cart_del')]
    public function remove(Products $products, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        $id = $products->getId();
        unset($cart[$id]);
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart_show', [ 'id'=>$id,]);
    }
    #[Route(['en' => '/show','fr' => '/voir',], name: 'cart_show')]
    public function show(SessionInterface $session, ProductsRepository $productsRepo): Response
    {
        $fullCart = [];
        $total = 0;
        $cart = $session->get('cart', []);
        foreach($cart as $id =>$qty){
            $products = $productsRepo->find($id);  
            $fullCart[]= ['products' => $products,'qty' => $qty,];
            $total += $products->getPrice()*$qty;
        }
        return $this->render('cart/cart.html.twig', [
            'cartProducts'=>$fullCart,
            'total' =>$total,
        ]);
    }
}
<?php
namespace App\Controller;
use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
#[Route('/cart')]
class CartController extends AbstractController
{
    // Fonction ADD
    #[Route(['/{products}/ajouter'], name: 'cart_add')]
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
    #[Route(['/{products}/moins'], name: 'cart_less')]
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
    #[Route(['/{products}/suprimmer'], name: 'cart_del')]
    public function remove(Products $products, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        $id = $products->getId();
        unset($cart[$id]);
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart_show', [ 'id'=>$id,]);
    }
    #[Route(['/show'], name: 'cart_show')]
    public function show(SessionInterface $session, ProductsRepository $productsRepo): Response
    {
        $total = 0;
        $fullCart = [];
        $cart = $session->get('cart', []);
        foreach($cart as $id =>$quantite){
            $products = $productsRepo->find($id);  
            $fullCart[]= ['products' => $products,'quantite' => $quantite,];
            $total += $products->getPrice() * $quantite;
        }
        return $this->render('cart/cart.html.twig', [
            'cartProducts'=>$fullCart,
            'total'=>$total,
        ]);
    }
}
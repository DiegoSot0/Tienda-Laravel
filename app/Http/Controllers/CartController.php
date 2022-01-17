<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }
    public function add_to_cart(Request $request)
    {
        //si el usuario ya agrego producto al carrito
        if ($request->session()->has('cart')) {
            //get recupera todo y has para ver si hay algo
            $cart = $request->session()->get('cart');
            //comprobamos si esta añadido o no
            $products_array_id = array_column($cart, 'id'); //array_column recupera todo los id si son 5 los 5
            $id = $request->input('id');  //aqui se recupera los id que estan en el input
            //si aun no esta en los productos agregados agregarlo
            if (!in_array($id, $products_array_id)) //in_array chekeamos si el id no existe en los los id recuperdos por array_column
            {
                $id = $request->input('id');
                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity');
                $sale_price = $request->input('sale_price');
                if ($sale_price != null) {
                    $price_to_charge = $sale_price;
                } else {
                    $price_to_charge = $price;
                }
                $product_array = array(
                    'id' => $id,
                    'name' => $name,
                    'image' => $image,
                    'price' => $price_to_charge,
                    'quantity' => $quantity
                );

                $cart[$id] = $product_array;
                $request->session()->put('cart', $cart); //put agrega en cart las variables de cart
                $this->calculateTotalCart($request);
            } else {
                echo "<script>alert('product is already in the cart');</script>";
            }
            return view('cart');
        }
        //si es el primer prodcuto que agregar al carrito
        else {
            $cart = array();
            $id = $request->input('id');
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $sale_price = $request->input('sale_price');
            if ($sale_price != null) {
                $price_to_charge = $sale_price;
            } else {
                $price_to_charge = $price;
            }
            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price_to_charge,
                'quantity' => $quantity,

            );

            $cart[$id] = $product_array;
            $request->session()->put('cart', $cart);
            $this->calculateTotalCart($request);

            return view('cart');
        }
    }

    function calculateTotalCart(Request $request)
    {
        //se crea dos variables 
        $total_price = 0;
        $total_quantity = 0;
        //se trae todos los datos de view cart y lo guarda en $cart
        $cart = $request->session()->get('cart');
        //corremos todos los datos del array $cart 
        foreach ($cart as $id => $product) {
            $product = $cart[$id]; //de product traemos el id
            $price = $product['price']; //teniendo el id del array product traemos el price
            $quantity = $product['quantity']; //tambien traemos quantity
            $total_price = $total_price + ($price * $quantity); //calculamos el total del precio
            $total_quantity = $total_quantity + $quantity;
        }
        $request->session()->put('total', $total_price);
        $request->session()->put('quantity', $total_quantity);
    }
    public function remove_from_cart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            $product_id = $request->input('id');
            unset($cart[$product_id]);
            $request->session()->put('cart', $cart);
            $this->calculateTotalCart($request);
        }
        return view('cart');
    }
    public function edit_product_quantity(Request $request)
    {   //Verifica si hay algo en el carrito
        if ($request->session()->has('cart')) {
            //guarda en $product_id lo del input id
            $product_id = $request->input('id');
            //guarda en $product_quantity lo del input quantity
            $product_quantity = $request->input('quantity');
            //recupera todo los datos de cart 
            $cart = $request->session()->get('cart');
            //a
            if (array_key_exists($product_id, $cart)) {
                $cart[$product_id]['quantity'] = $product_quantity;
                $request->session()->put('cart', $cart);
                $this->calculateTotalCart($request);
            }
            return view('cart');
        }
    }
    public function checkout()
    {
        return view('checkout');
    }
}

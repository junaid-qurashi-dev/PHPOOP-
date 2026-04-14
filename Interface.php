<?php
class Shopping
{
    function calculationDiscount($price, $discount)
    {
        $discountPrice = $price - $discount;
        return $discountPrice;
    }
    function addTax($amount)
    {
        $tax = 50;
        $finalamount = $amount + $tax;
        echo 'Final Bill (Discount + Tax): ' . $finalamount;
    }
}
$shop = new Shopping();
$priceAfterDiscount = $shop->calculationDiscount(1000, 200);
$shop->addTax($priceAfterDiscount);

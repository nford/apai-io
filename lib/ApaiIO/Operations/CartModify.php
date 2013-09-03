<?php
/*
 *
 */

namespace ApaiIO\Operations;

/**
 * A cart add operation
 *
 * @see    http://docs.aws.amazon.com/AWSECommerceService/2011-08-01/DG/CartModify.html
 * @author Nelson Ford <contact@nelsonford.net>
 */
class CartModify extends AbstractOperation
{
	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		return 'CartModify';
	}

	/**
	 * Sets the cart id
	 *
	 * @param string $cartId
	 */
	public function setCartId($cartId)
	{
		$this->parameter['CartId'] = $cartId;
	}

	/**
	 * Sets the HMAC
	 *
	 * @param string $HMAC
	 */
	public function setHMAC($HMAC)
	{
		$this->parameter['HMAC'] = $HMAC;
	}

	/**
	 * Sets CartItemId
	 *
	 * @param string $cartItemId
	 * @param int $index
	 */
	public function setCartItemId($cartItemId, $index)
	{
		$this->parameter["Item.$index.CartItemId"] = $cartItemId;
	}

	/**
	 * Sets Quantity
	 *
	 * @param string $quantity
	 * @param int $index
	 */
	public function setQuantity($quantity, $index)
	{
		$this->parameter["Item.$index.Quantity"] = $quantity;
	}

}

<?php
/**
 * Checkout for Craft Commerce
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) 2019 Ether Creative
 */

namespace ether\checkout;

use Craft;
use craft\base\Plugin;
use ether\checkout\models\Settings;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class Checkout
 *
 * @author  Ether Creative
 * @package ether\checkout
 */
class Checkout extends Plugin
{

	// Properties
	// =========================================================================

	public $hasCpSettings = true;

	// Craft
	// =========================================================================

	public function init ()
	{
		parent::init();
	}

	// Settings
	// =========================================================================

	protected function createSettingsModel ()
	{
		return new Settings();
	}

	/**
	 * @return string|null
	 * @throws LoaderError
	 * @throws RuntimeError
	 * @throws SyntaxError
	 */
	protected function settingsHtml ()
	{
		return Craft::$app->getView()->renderTemplate('checkout/_settings', [
			'settings' => $this->getSettings(),
		]);
	}

	/**
	 * @return bool|Settings|null
	 */
	public function getSettings ()
	{
		return parent::getSettings();
	}

}
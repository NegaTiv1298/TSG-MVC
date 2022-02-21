<?php

declare(strict_types=1);

namespace Controllers;

use Core\Controller;
use Core\View;

/**
 * Class CustomerController
 * @package Controllers
 */
class CustomerController extends Controller
{
    /**
     * Customer index action that shows customer list
     *
     * @return void
     */
    public function indexAction(): void
    {
        $this->forward('customer/list');
    }

    /**
     * Customer list action
     *
     * @return void
     */
    public function listAction(): void
    {
        $this->set('title', "Клієнти");

        $customer = $this->getModel('Customer')
            ->initCollection()
            ->getCollection()
            ->select();
        $this->set('customer', $customer);

        $this->renderLayout();
    }
}
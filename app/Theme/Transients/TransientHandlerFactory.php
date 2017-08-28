<?php
/**
 * WP Backend System - Transient Handler Factory
 *
 * @since       15.08.2017
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright   
 */

namespace App\Theme\Transients;

/***********************************************/
/********** TRANSIENT HANDLER FACTORY **********/
/***********************************************/

class TransientHandlerFactory implements HandlerFactory
{

    /*******************************/
    /********** ATTRIBUTS **********/
    /*******************************/

    /*********************************************************************************/
    /*********************************************************************************/

    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    public function __construct()
    {
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /****************************/
    /********** CREATE **********/
    /****************************/

    /*
     * @return Handler
     */

    public function create(): Handler
    {
        return new TransientHandler(new MainTransientAdministrator(), new MainTransientOperator());
    }

    /*********************************************************************************/
    /*********************************************************************************/

}
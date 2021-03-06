<?php

namespace Fuz\AppBundle\Controller;

use Fuz\AppBundle\Base\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/options")
 */
class OptionsController extends BaseController
{

    /**
     * JavaScript options
     *
     * An overview of almost all options that you
     * can enable/disable/customize on the fly.
     *
     * @Route("/overview", name="overview")
     * @Template()
     */
    public function overviewAction(Request $request)
    {
        return $this->createContextSample($request);
    }

    /**
     * JavaScript options
     *
     * Customized buttons
     *
     * @Route("/customButtons", name="customButtons")
     * @Template()
     */
    public function customButtonsAction(Request $request)
    {
        return $this->createContextSample($request);
    }

    /**
     * JavaScript options
     *
     * Disable buttons you don't want
     *
     * @Route("/enableButtons", name="enableButtons")
     * @Template()
     */
    public function enableButtonsAction(Request $request)
    {
        return array_merge(
           $this->createContextSample($request), $this->createAdvancedContextSample($request)
        );
    }

    /**
     * JavaScript options
     *
     * Control the minimum and maximum of allowed number of elements
     *
     * @Route("/numberCollectionElements", name="numberCollectionElements")
     * @Template()
     */
    public function numberCollectionElementsAction(Request $request)
    {
        return array_merge(
           $this->createContextSample($request), $this->createAdvancedContextSample($request)
        );
    }

    /**
     * JavaScript options
     *
     * Add the button close to each collection elements or only at the bottom
     *
     * @Route("/addButtonAtTheBottom", name="addButtonAtTheBottom")
     * @Template()
     */
    public function addButtonAtTheBottomAction(Request $request)
    {
        return array_merge(
           $this->createContextSample($request, 'enabled'), $this->createContextSample($request, 'disabled')
        );
    }

    /**
     * JavaScript options
     *
     * Run a callback before or after adding, deleting and moving elements
     *
     * @Route("/eventCallbacks", name="eventCallbacks")
     * @Template()
     */
    public function eventCallbacksAction(Request $request)
    {
        return array_merge(
           $this->createContextSample($request, 'eventsBefore'), $this->createContextSample($request, 'eventsAfter')
        );
    }

    /**
     * JavaScript options
     *
     * Use this plugin without the attached form-theme
     *
     * @Route("/withoutFormTheme", name="withoutFormTheme")
     * @Template()
     */
    public function withoutFormThemeAction(Request $request)
    {
        return $this->createContextSample($request);
    }

    /**
     * JavaScript options
     *
     * Initialize a collection with a given minimum number of elements
     *
     * @Route("/givenMinimumElements", name="givenMinimumElements")
     * @Template()
     */
    public function givenMinimumElementsAction(Request $request)
    {
        return $this->createContextSample($request, 'form', []);
    }

    /**
     * JavaScript options
     *
     * Hide move-up on the first item and move-down on the last one
     *
     * @Route("/hideMoveUpDown", name="hideMoveUpDown")
     * @Template()
     */
    public function hideMoveUpDownAction(Request $request)
    {
        return $this->createContextSample($request, 'form');
    }

    /**
     * JavaScript options
     *
     * Drag & Drop allow to get rid of "move up" and "move down" buttons
     *
     * @Route("/dragAndDrop", name="dragAndDrop")
     * @Template()
     */
    public function dragAndDropAction(Request $request)
    {
        return [
            'disabled'    => $this->createAdvancedContextSample($request, 'disabled'),
            'nobuttons'   => $this->createAdvancedContextSample($request, 'nobuttons'),
            'moreoptions' => $this->createAdvancedContextSample($request, 'moreoptions'),
            'startupdate' => $this->createAdvancedContextSample($request, 'startupdate'),
        ];
    }

    /**
     * JavaScript options
     *
     * Run a callback before and after collection initialization
     *
     * @Route("/initCallbacks", name="initCallbacks")
     * @Template()
     */
    public function initCallbacksAction(Request $request)
    {
        return $this->createContextSample($request);
    }

    /**
     * JavaScript options
     *
     * Put buttons to custom locations in your page.
     *
     * @Route(
     *      "/buttons-custom-location",
     *      name = "buttonsCustomLocation"
     * )
     * @Template()
     */
    public function buttonsCustomLocationAction(Request $request)
    {
        return array_merge(
           $this->createContextSample($request, 'collectionA'), $this->createContextSample($request, 'collectionB'), $this->createContextSample($request, 'collectionC')
        );
    }

    /**
     * JavaScript options
     *
     * Enable / disable fade animation when adding / removing
     * collection elements.
     *
     * @Route("/fadeInFadeOut", name="fadeInFadeOut")
     * @Template()
     */
    public function fadeInFadeOutAction(Request $request)
    {
        return $this->createContextSample($request);
    }
}

<?php
namespace AcceptanceTester;

class CRMUserSteps extends \AcceptanceTester
{

    function amInQueryCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/query');
    }

    function fillInPhoneFieldWithDataFrom($customer_data)
    {
        $I=$this;
        $I -> fillField(
            'PhoneRecord[number]',
            $customer_data['PhoneRecord[number]']
        );
    }

    function clickSearchButton()
    {
        $I=$this;
        $I->click('Search');
    }

    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers/');
    }

    function seeCustomerInList($customer_data)
    {
        $I=$this;
        $I->see($customer_data['CustomerRecord[name]'],'#search_results');
    }

    function dontSeeCustomerInList($customer_data)
    {
        $I=$this;
        $I->dontSee($customer_data['CustomerRecord[name]'],'#search_results');
    }

}
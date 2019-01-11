<?php

namespace MauticPlugin\MauticDNCEventBundle\Model;

use Mautic\CoreBundle\Model\FormModel;
use Mautic\LeadBundle\Entity\DoNotContact;

class DNCEventModel extends FormModel
{
    public function addDoNotContact($lead, $comments)
    {
        $leadModel = $this->factory->getModel('lead');

        $res = $leadModel->addDncForLead($lead, 'email', $comments, DoNotContact::UNSUBSCRIBED, true);

        return true;
    }

    public function removeDoNotContact($lead, $comments)
    {
        $leadModel = $this->factory->getModel('lead');

        $res = $leadModel->removeDncForLead($lead, 'email', $comments, DoNotContact::UNSUBSCRIBED, true);

        return true;
    }
}

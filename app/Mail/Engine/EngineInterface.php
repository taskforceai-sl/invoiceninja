<?php

/**
 * Red Invoice (https://redinvoice.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2025. The Red Sun
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace App\Mail\Engine;

interface EngineInterface
{
    public function setFooter($footer);

    public function setVariables($variables);

    public function setContact($contact);

    public function setSubject($subject);

    public function setBody($body);

    public function setTemplate($template_style);

    public function setAttachments($attachments);

    public function setViewLink($link);

    public function setViewText($text);

    public function getSubject();

    public function getBody();

    public function getAttachments();

    public function getFooter();

    public function getTemplate();

    public function getViewLink();

    public function getViewText();

    public function build();

    public function getTextBody();
}

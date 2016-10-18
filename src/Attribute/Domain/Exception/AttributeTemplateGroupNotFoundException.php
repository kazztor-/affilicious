<?php
namespace Affilicious\Attribute\Domain\Exception;

use Affilicious\Attribute\Domain\Model\AttributeTemplateGroupId;
use Affilicious\Common\Domain\Exception\PostNotFoundException;

if(!defined('ABSPATH')) {
    exit('Not allowed to access pages directly.');
}

class AttributeTemplateGroupNotFoundException extends PostNotFoundException
{
    /**
     * @since 0.6
     * @param AttributeTemplateGroupId|string|int $attributeTemplateGroupId
     */
    public function __construct($attributeTemplateGroupId)
    {
        parent::__construct(sprintf(
            "The attribute template group #%s wasn't found.",
            $attributeTemplateGroupId
        ));
    }
}
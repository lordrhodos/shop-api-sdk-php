<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductCategoryLanguagesModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Starweb\Api\Generated\Model\ProductCategoryLanguagesModel();
        if (property_exists($data, 'langCode')) {
            $object->setLangCode($data->{'langCode'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'pageTitle') && $data->{'pageTitle'} !== null) {
            $object->setPageTitle($data->{'pageTitle'});
        }
        elseif (property_exists($data, 'pageTitle') && $data->{'pageTitle'} === null) {
            $object->setPageTitle(null);
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        elseif (property_exists($data, 'description') && $data->{'description'} === null) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'bottomDescription') && $data->{'bottomDescription'} !== null) {
            $object->setBottomDescription($data->{'bottomDescription'});
        }
        elseif (property_exists($data, 'bottomDescription') && $data->{'bottomDescription'} === null) {
            $object->setBottomDescription(null);
        }
        if (property_exists($data, 'pageMetaDescription') && $data->{'pageMetaDescription'} !== null) {
            $object->setPageMetaDescription($data->{'pageMetaDescription'});
        }
        elseif (property_exists($data, 'pageMetaDescription') && $data->{'pageMetaDescription'} === null) {
            $object->setPageMetaDescription(null);
        }
        if (property_exists($data, 'permalink') && $data->{'permalink'} !== null) {
            $object->setPermalink($data->{'permalink'});
        }
        elseif (property_exists($data, 'permalink') && $data->{'permalink'} === null) {
            $object->setPermalink(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        $data->{'pageTitle'} = $object->getPageTitle();
        $data->{'description'} = $object->getDescription();
        $data->{'bottomDescription'} = $object->getBottomDescription();
        $data->{'pageMetaDescription'} = $object->getPageMetaDescription();
        $data->{'permalink'} = $object->getPermalink();
        return $data;
    }
}
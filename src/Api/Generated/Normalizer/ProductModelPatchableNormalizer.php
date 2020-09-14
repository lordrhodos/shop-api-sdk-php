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
class ProductModelPatchableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductModelPatchable';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductModelPatchable';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Starweb\Api\Generated\Model\ProductModelPatchable();
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        elseif (property_exists($data, 'externalId') && $data->{'externalId'} === null) {
            $object->setExternalId(null);
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        elseif (property_exists($data, 'externalIdType') && $data->{'externalIdType'} === null) {
            $object->setExternalIdType(null);
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} !== null) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        elseif (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} === null) {
            $object->setDefaultVatRate(null);
        }
        if (property_exists($data, 'visibility')) {
            $object->setVisibility($data->{'visibility'});
        }
        if (property_exists($data, 'visibilityPricelistIds') && $data->{'visibilityPricelistIds'} !== null) {
            $values = array();
            foreach ($data->{'visibilityPricelistIds'} as $value) {
                $values[] = $value;
            }
            $object->setVisibilityPricelistIds($values);
        }
        elseif (property_exists($data, 'visibilityPricelistIds') && $data->{'visibilityPricelistIds'} === null) {
            $object->setVisibilityPricelistIds(null);
        }
        if (property_exists($data, 'moreInfoUrl') && $data->{'moreInfoUrl'} !== null) {
            $object->setMoreInfoUrl($data->{'moreInfoUrl'});
        }
        elseif (property_exists($data, 'moreInfoUrl') && $data->{'moreInfoUrl'} === null) {
            $object->setMoreInfoUrl(null);
        }
        if (property_exists($data, 'manufacturerId') && $data->{'manufacturerId'} !== null) {
            $object->setManufacturerId($data->{'manufacturerId'});
        }
        elseif (property_exists($data, 'manufacturerId') && $data->{'manufacturerId'} === null) {
            $object->setManufacturerId(null);
        }
        if (property_exists($data, 'unitId') && $data->{'unitId'} !== null) {
            $object->setUnitId($data->{'unitId'});
        }
        elseif (property_exists($data, 'unitId') && $data->{'unitId'} === null) {
            $object->setUnitId(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'isBackInStockWatchable')) {
            $object->setIsBackInStockWatchable($data->{'isBackInStockWatchable'});
        }
        if (property_exists($data, 'bundleUseManualPrice') && $data->{'bundleUseManualPrice'} !== null) {
            $object->setBundleUseManualPrice($data->{'bundleUseManualPrice'});
        }
        elseif (property_exists($data, 'bundleUseManualPrice') && $data->{'bundleUseManualPrice'} === null) {
            $object->setBundleUseManualPrice(null);
        }
        if (property_exists($data, 'accounting') && $data->{'accounting'} !== null) {
            $object->setAccounting($data->{'accounting'});
        }
        elseif (property_exists($data, 'accounting') && $data->{'accounting'} === null) {
            $object->setAccounting(null);
        }
        if (property_exists($data, 'mediaFiles')) {
            $values_1 = array();
            foreach ($data->{'mediaFiles'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel', 'json', $context);
            }
            $object->setMediaFiles($values_1);
        }
        if (property_exists($data, 'languages')) {
            $values_2 = array();
            foreach ($data->{'languages'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel', 'json', $context);
            }
            $object->setLanguages($values_2);
        }
        if (property_exists($data, 'vatRates')) {
            $values_3 = array();
            foreach ($data->{'vatRates'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel', 'json', $context);
            }
            $object->setVatRates($values_3);
        }
        if (property_exists($data, 'categories')) {
            $values_4 = array();
            foreach ($data->{'categories'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModel', 'json', $context);
            }
            $object->setCategories($values_4);
        }
        if (property_exists($data, 'metaData')) {
            $values_5 = array();
            foreach ($data->{'metaData'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelUpdatable', 'json', $context);
            }
            $object->setMetaData($values_5);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'externalId'} = $object->getExternalId();
        $data->{'externalIdType'} = $object->getExternalIdType();
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        $data->{'defaultVatRate'} = $object->getDefaultVatRate();
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        if (null !== $object->getVisibilityPricelistIds()) {
            $values = array();
            foreach ($object->getVisibilityPricelistIds() as $value) {
                $values[] = $value;
            }
            $data->{'visibilityPricelistIds'} = $values;
        }
        else {
            $data->{'visibilityPricelistIds'} = null;
        }
        $data->{'moreInfoUrl'} = $object->getMoreInfoUrl();
        $data->{'manufacturerId'} = $object->getManufacturerId();
        $data->{'unitId'} = $object->getUnitId();
        $data->{'sortIndex'} = $object->getSortIndex();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getIsBackInStockWatchable()) {
            $data->{'isBackInStockWatchable'} = $object->getIsBackInStockWatchable();
        }
        $data->{'bundleUseManualPrice'} = $object->getBundleUseManualPrice();
        $data->{'accounting'} = $object->getAccounting();
        if (null !== $object->getMediaFiles()) {
            $values_1 = array();
            foreach ($object->getMediaFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'mediaFiles'} = $values_1;
        }
        if (null !== $object->getLanguages()) {
            $values_2 = array();
            foreach ($object->getLanguages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'languages'} = $values_2;
        }
        if (null !== $object->getVatRates()) {
            $values_3 = array();
            foreach ($object->getVatRates() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'vatRates'} = $values_3;
        }
        if (null !== $object->getCategories()) {
            $values_4 = array();
            foreach ($object->getCategories() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'categories'} = $values_4;
        }
        if (null !== $object->getMetaData()) {
            $values_5 = array();
            foreach ($object->getMetaData() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'metaData'} = $values_5;
        }
        return $data;
    }
}
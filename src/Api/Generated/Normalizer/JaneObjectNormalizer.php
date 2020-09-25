<?php

namespace Starweb\Api\Generated\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    protected $normalizers = array('Starweb\\Api\\Generated\\Model\\ErrorModel' => 'Starweb\\Api\\Generated\\Normalizer\\ErrorModelNormalizer', 'Starweb\\Api\\Generated\\Model\\PaginationModel' => 'Starweb\\Api\\Generated\\Normalizer\\PaginationModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderPutModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderPutModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderUpdateModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderUpdateModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderModelCollectionMeta' => 'Starweb\\Api\\Generated\\Normalizer\\OrderModelCollectionMetaNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingTrackingTypeModel' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingTrackingTypeModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingTrackingTypeModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingTrackingTypeModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\AddressModel' => 'Starweb\\Api\\Generated\\Normalizer\\AddressModelNormalizer', 'Starweb\\Api\\Generated\\Model\\AddressModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\AddressModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderAddressModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderAddressModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderAddressCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderAddressCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderStatusModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderStatusModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderStatusLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderStatusLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderStatusLanguageModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderStatusLanguageModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderStatusModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderStatusModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderStatusModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderStatusModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderItemModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderItemModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderItemModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderItemModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderItemBundledModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderItemBundledModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderItemBundledModelItemBundledItems' => 'Starweb\\Api\\Generated\\Normalizer\\OrderItemBundledModelItemBundledItemsNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderItemModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderItemModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderItemModelCollectionDataItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderItemModelCollectionDataItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderExternalServiceModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderExternalServiceModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderExternalServicesModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderExternalServicesModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderExternalServiceModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderExternalServiceModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\CurrencyModel' => 'Starweb\\Api\\Generated\\Normalizer\\CurrencyModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CurrencyModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CurrencyModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CurrencyCollection' => 'Starweb\\Api\\Generated\\Normalizer\\CurrencyCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModel' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerUpdateModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModelAddresses' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerUpdateModelAddressesNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerModel' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerCreatedModel' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerCreatedModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerCreatedModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerCreatedModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerModelCollectionMeta' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerModelCollectionMetaNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerAddedTagModel' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerAddedTagModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerAddedTagModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerAddedTagModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerAddedTagModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerAddedTagModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerAddressesModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerAddressesModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerAddressesModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerAddressesModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerAddressesModelCollectionData' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerAddressesModelCollectionDataNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModel' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerExternalServicesModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerExternalServicesModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerExternalServicesModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\TokenModel' => 'Starweb\\Api\\Generated\\Normalizer\\TokenModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ClientCredentialModel' => 'Starweb\\Api\\Generated\\Normalizer\\ClientCredentialModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerTagModel' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerTagModelNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerTagModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerTagModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\CustomerTagModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\CustomerTagModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\PaymentMethodLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\PaymentMethodLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\PaymentMethodLanguageModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\PaymentMethodLanguageModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\PaymentMethodModel' => 'Starweb\\Api\\Generated\\Normalizer\\PaymentMethodModelNormalizer', 'Starweb\\Api\\Generated\\Model\\PaymentMethodModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\PaymentMethodModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\PaymentMethodModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\PaymentMethodModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingMethodLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingMethodLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingMethodLanguageModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingMethodLanguageModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingMethodModel' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingMethodModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingMethodModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingMethodModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ShippingMethodModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ShippingMethodModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\PricelistModel' => 'Starweb\\Api\\Generated\\Normalizer\\PricelistModelNormalizer', 'Starweb\\Api\\Generated\\Model\\PricelistModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\PricelistModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\PricelistModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\PricelistModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderCommentModel' => 'Starweb\\Api\\Generated\\Normalizer\\OrderCommentModelNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderCommentModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\OrderCommentModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\OrderCommentModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\OrderCommentModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\MediaFileUploadModel' => 'Starweb\\Api\\Generated\\Normalizer\\MediaFileUploadModelNormalizer', 'Starweb\\Api\\Generated\\Model\\MediaFileModel' => 'Starweb\\Api\\Generated\\Normalizer\\MediaFileModelNormalizer', 'Starweb\\Api\\Generated\\Model\\MediaFileModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\MediaFileModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\MediaFileModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\MediaFileModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\MediaFileModelCollectionMeta' => 'Starweb\\Api\\Generated\\Normalizer\\MediaFileModelCollectionMetaNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryLanguagesModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryLanguagesModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelCollectionMeta' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryModelCollectionMetaNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModelLanguages' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelLanguagesNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModelPatchable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelPatchableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductModelCollectionMeta' => 'Starweb\\Api\\Generated\\Normalizer\\ProductModelCollectionMetaNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantPutRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantPatchRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantPatchRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantResponseModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantResponseModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMediaFileLinkModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMediaFileLinkModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMediaFileLinkModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductLanguageModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductLanguageModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductLanguageModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductLanguageModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductLanguageSlimModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductLanguageSlimModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVatRateModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVatRateModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVatRateModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVatRateModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVatRateModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryLinkModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryLinkModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductCategoryLinkModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaLanguageDataModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaLanguageDataModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaLanguageDataModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaLanguageDataModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaLanguageDataModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaLanguageDataModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductUnitModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductUnitModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductUnitModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductUnitModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductUnitModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductUnitModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductUnitModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductUnitModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductUnitLanguageModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductUnitLanguageModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductUnitLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductUnitLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantPriceModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantPriceModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantPriceModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantVolumePriceModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantVolumePriceModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantVolumePriceModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductManufacturerModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductManufacturerModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductManufacturerModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductManufacturerModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductManufacturerModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductManufacturerModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataTypeModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataTypeModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataTypeModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataTypeModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeLanguageModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataTypeLanguageModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductMetaDataTypeLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductStockStatusResponseModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModelLanguages' => 'Starweb\\Api\\Generated\\Normalizer\\ProductStockStatusResponseModelLanguagesNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductStockStatusRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductStockStatusRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductStockStatusLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductStockStatusLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductStockStatusModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductStockStatusModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ShopModel' => 'Starweb\\Api\\Generated\\Normalizer\\ShopModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ShopItem' => 'Starweb\\Api\\Generated\\Normalizer\\ShopItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeValueModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeValueModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeValueModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeValueLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeValueModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModelLanguages' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeValueModelLanguagesNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeModelUpdatable' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeModelUpdatableNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeModelLanguages' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantAttributeModelLanguagesNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductsAttributesModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductsAttributesModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\VatRateModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\VatRateModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\VatRateModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\VatRateModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\VatRateModel' => 'Starweb\\Api\\Generated\\Normalizer\\VatRateModelNormalizer', 'Starweb\\Api\\Generated\\Model\\WebHookModel' => 'Starweb\\Api\\Generated\\Normalizer\\WebHookModelNormalizer', 'Starweb\\Api\\Generated\\Model\\WebHookModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\WebHookModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\WebHookModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\WebHookModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\BundledProductsModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\BundledProductsModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\BundledProductsModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\BundledProductsModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\BundledProductsModel' => 'Starweb\\Api\\Generated\\Normalizer\\BundledProductsModelNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationModel' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationModelNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationPostRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationPostRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationPutRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationPutRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationLanguagesModel' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationLanguagesModelNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationLanguagesModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationLanguagesModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\StockLocationModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\StockLocationModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantStockModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantStockModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantStockModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantStockModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantStockResponseModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantStockResponseModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductVariantStockPutRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductVariantStockPutRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductBundleProductPriceModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductBundleProductPriceModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductBundleProductPriceModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagPostRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagPostRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagPutRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagPutRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagPatchRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagPatchRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagLinkModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagLinkModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagLinkModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagLinkModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagLinkModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagLinkModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagLinkPostRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagLinkPostRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionLanguageModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionLanguageModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionPostRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionPostRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModelItem' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionModelItemNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModelCollection' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionModelCollectionNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionPutRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionPutRequestModelNormalizer', 'Starweb\\Api\\Generated\\Model\\ProductTagOptionPatchRequestModel' => 'Starweb\\Api\\Generated\\Normalizer\\ProductTagOptionPatchRequestModelNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}
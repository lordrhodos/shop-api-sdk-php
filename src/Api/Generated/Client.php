<?php

namespace Starweb\Api\Generated;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GenerateFetchAccessTokenBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function generateFetchAccessToken(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GenerateFetchAccessToken(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCurrencies(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCurrencyNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrency(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCurrency(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomersTags(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomersTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomersTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListCustomersBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListCustomers(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateCustomerBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutCustomerBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalServices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerExternalServices(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerTags(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\AddTagToCustomerBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addTagToCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\AddTagToCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\RemoveTagFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeTagFromCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\RemoveTagFromCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerGroups(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerForbiddenException
     * @throws \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeAddressFromCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\RemoveAddressFromCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomerAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchCustomerAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutCustomerAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutCustomerAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutCustomerAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFiles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetMediaFiles(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateMediaFileBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchMediaFileBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutMediaFileBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListOrdersBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListOrders(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listOrderAddresses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListOrderAddresses(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComments(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderComments(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\AddCommentToOrderBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addCommentToOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\AddCommentToOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\RemoveCommentFromOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeCommentFromOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\RemoveCommentFromOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderCommentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComment(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderComment(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchCommentToOrderBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchCommentToOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchCommentToOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\UpdateCommentToOrderBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCommentToOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\UpdateCommentToOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalServices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderExternalServices(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderExternalServiceBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrderExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderExternalServiceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderExternalServiceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItems(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderItems(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderItemBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrderItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderItemBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderItemBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatuses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderStatuses(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderStatusBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrderStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderStatusForbiddenException
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderStatusForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PutOrderStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPaymentMethods(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetPaymentMethodNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPaymentMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelists(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPricelists(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreatePricelistBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createPricelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreatePricelist(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeletePricelistNotFoundException
     * @throws \Starweb\Api\Generated\Exception\DeletePricelistForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePricelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeletePricelist(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetPricelistNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPricelist(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchPricelistBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchPricelistNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchPricelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchPricelist(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutPricelistBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutPricelistNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putPricelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutPricelist(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListVatRatesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listVatRates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListVatRates(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsAttributesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsAttributes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateAttributeBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchAttributeBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutAttributeBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributeValues(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsAttributeValues(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsVariantsAttributeValues(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsVariantsAttributeValues(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteAttributeValueNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttributeValue(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteAttributeValue(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsAttributeValueNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttributeValue(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsAttributeValue(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariantsAttributeValues(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariantsAttributeValues(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariantsAttributeValues(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariantsAttributeValues(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductCategoriesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductCategories(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductCategories(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductCategoryBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductCategory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductCategory(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductCategory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductCategory(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductCategory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductCategory(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductCategoryBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductCategory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductCategory(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductCategoryBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductCategory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductCategory(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductManufacturersBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductManufacturers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductManufacturers(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductManufacturersBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductManufacturers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductManufacturers(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductManufacturerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductManufacturer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductManufacturer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductManufacturerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductManufacturer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductManufacturer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductManufacturerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductManufacturer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductManufacturer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductManufacturerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductManufacturer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductManufacturer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductUnitsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductUnits(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductUnits(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductUnitNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductUnit(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductUnit(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductMetaDataTypesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductMetaDataTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductMetaDataTypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductMetaDataTypeBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductMetaDataType(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductMetaDataType(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductMetaDataTypeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductMetaDataType(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductMetaDataType(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductMetaDataTypeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductMetaDataType(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductMetaDataType(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductMetaDataType(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductMetaDataType(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductMetaDataTypeBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductMetaDataTypeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductMetaDataType(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductMetaDataType(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductStockStatsesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductStockStatses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductStockStatses(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductStockStatusBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductStockStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductStockStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductStockStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductStockStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductStockStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductStockStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductStockStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsTags(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductTagBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsTagOptions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsTagOptions(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagOptionMethodNotAllowedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductTagOption(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductTagOption(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagOptionMethodNotAllowedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTagOption(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductTagOption(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductTagOptionsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTagOptions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductTagOptions(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionMethodNotAllowedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductTagOption(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductTagOption(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionMethodNotAllowedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductTagOption(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductTagOption(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProducts(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsBundledProductsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsBundledProducts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsBundledProducts(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductBundledProductBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductBundledProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductBundledProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsBundledProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsBundledProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsBundledProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsBundledProductsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsBundledProducts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsBundledProducts(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsBundledProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsBundledProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsBundledProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsBundledProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsBundledProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsBundledProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsBundledProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsBundledProduct(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariants(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariants(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductVariantBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVariant(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVariant(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariant(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariant(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariant(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVatRatesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVatRates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVatRates(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductVatRateBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVatRateBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVatRateBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsMediaFileLinksBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMediaFileLinks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsMediaFileLinks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsMediaFileLinkBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsMediaFileLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsMediaFileLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsMediaFileLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsMediaFileLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsMediaFileLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsLanguagesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsLanguages(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsLanguages(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsLanguageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsLanguage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsLanguage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsLanguage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsLanguageBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsLanguage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsLanguageBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsLanguage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsCategoryLinksBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsCategoryLinks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsCategoryLinks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsCategoryLinkBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsCategoryLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsCategoryLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsCategoryLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsCategoryLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsCategoryLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsMetaDataBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsMetaDataBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsAttributesNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsAttributes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsAttributes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsPricelistPricesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsPricelistPrices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsPricelistPrices(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductVariantPricelistPriceBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariantPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVariantPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariantsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVariantsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistPriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariantsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariantsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistPriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariantsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariantsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductBundledProductsPricelistPricesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductBundledProductsPricelistPrices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductBundledProductsPricelistPrices(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductBundleProductPricelistPriceBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductBundleProductPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductBundleProductPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductBundledProductsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductBundledProductsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductBundledProductsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductBundledProductsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductBundledProductsPricelistPriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductBundledProductsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductBundledProductsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductBundledProductsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductBundledProductsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductTagLinksBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductTagLinks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductTagLinks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagLinkBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductTagLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductTagLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTagLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductTagLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductTagLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTagLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductTagLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsPricelistVolumePricesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsPricelistVolumePrices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsPricelistVolumePrices(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductVariantPricelistVolumePriceBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariantPricelistVolumePrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVariantPricelistVolumePrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariantsPricelistVolumePrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVariantsPricelistVolumePrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsPricelistVolumePrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsPricelistVolumePrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariantsPricelistVolumePrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariantsPricelistVolumePrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistVolumePriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariantsPricelistVolumePrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariantsPricelistVolumePrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsStocksBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsStocks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsStocks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductVariantStocksNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductVariantStocks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductVariantStocks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductVariantStockNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductVariantStock(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductVariantStock(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductVariantStockBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductVariantStockNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProductVariantStock(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductVariantStock(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShippingMethods(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetShippingMethodNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShippingMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingTrackingTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShippingTrackingTypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetShopNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShop(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShop(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListStockLocationsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listStockLocations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListStockLocations(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\CreateStockLocationForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createStockLocation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateStockLocation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\DeleteStockLocationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStockLocation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteStockLocation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetStockLocationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getStockLocation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetStockLocation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchStockLocation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchStockLocation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putStockLocation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutStockLocation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getWebHooks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetWebHooks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateWebHookBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createWebHook(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateWebHook(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteWebHookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWebHook(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteWebHook(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetWebHookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getWebHook(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetWebHook(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchWebHookBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchWebHookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchWebHook(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchWebHook(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutWebHookBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutWebHookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putWebHook(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutWebHook(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Starweb\Api\Generated\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
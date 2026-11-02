<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated;

class Client extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Client
{
    /**
     * Get the audit log.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[endpoint]"?: string, //A filter for restricting the audit log to a endpoint.
     *    "filter[version]"?: string, //A filter for restricting the audit log to a endpoint version.
     *    "filter[identifier]"?: mixed, //A filter for querying actions for a identifier.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuditLogCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuditLogCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getAuditLogCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuditLogCollection($queryParameters));
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all role to permission assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters));
    }
    /**
     * Create one or more role to permission assignments in this resource server
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function postAuthPermissionRoleCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all permissions from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters));
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all role to identity assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleIdentityCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters));
    }
    /**
     * Create one or more role to identity assignments in this resource server
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function postAuthRoleIdentityCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all available roles from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters));
    }
    /**
     * Delete a role for this resource server
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\DeleteAuthRole($roleCode));
    }
    /**
     * Get a role from this resource server by its roleCode
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthRole($roleCode));
    }
    /**
     * Patch a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody));
    }
    /**
     * Post a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody));
    }
    /**
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApi()
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetOpenApi());
    }
    /**
     * Get the changelog in the specified format
     * @param string $format Changelog file format
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getChangelogInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetChangelogInFormat($format));
    }
    /**
     * Get the openapi documentation in the specified format
     * @param string $format Openapi file format
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApiInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetOpenApiInFormat($format));
    }
    /**
     * Query sku-groups by skuGroupIds
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[skuGroupIds]"?: string, //skuGroupIds filter
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResourceCollection|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getSkuGroupCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSkuGroupCollection($queryParameters));
    }
    /**
     * Add a SKU Group
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function postSkuGroup(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostSkuGroup($requestBody));
    }
    /**
     * Get a SKU Group by skuGroupId
     * @param string $skuGroupId SKU Group Id
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getSkuGroup(string $skuGroupId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSkuGroup($skuGroupId));
    }
    /**
     * Query skus
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated. \
     *                               //This can mean loss of performance.
     *    "filter[skuCodes]"?: string, //skuCodes filter
     *    "filter[skuGroupIds]"?: string, //skuGroupIds filter
     *    "filter[active]"?: bool, //active filter
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResourceCollection|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getSkuCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSkuCollection($queryParameters));
    }
    /**
     * Add a SKU
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function postSku(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostSku($requestBody));
    }
    /**
     * Get a SKU by skuCode
     * @param string $skuCode SKU Code
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function getSku(string $skuCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSku($skuCode));
    }
    /**
     * Update one or more fields of a SKU
     * @param string $skuCode SKU Code
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PatchSkuResource $requestBody
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchSkuNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PatchSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    public function patchSku(string $skuCode, \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PatchSkuResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PatchSku($skuCode, $requestBody));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://sku-catalog-api.steve.niceshops.com/v2');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}
<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\AnalyticsData;

class QueryAudienceExportResponse extends \Google\Site_Kit_Dependencies\Google\Collection
{
    protected $collection_key = 'audienceRows';
    protected $audienceExportType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsData\AudienceExport::class;
    protected $audienceExportDataType = '';
    protected $audienceRowsType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsData\V1betaAudienceRow::class;
    protected $audienceRowsDataType = 'array';
    /**
     * @var int
     */
    public $rowCount;
    /**
     * @param AudienceExport
     */
    public function setAudienceExport(\Google\Site_Kit_Dependencies\Google\Service\AnalyticsData\AudienceExport $audienceExport)
    {
        $this->audienceExport = $audienceExport;
    }
    /**
     * @return AudienceExport
     */
    public function getAudienceExport()
    {
        return $this->audienceExport;
    }
    /**
     * @param V1betaAudienceRow[]
     */
    public function setAudienceRows($audienceRows)
    {
        $this->audienceRows = $audienceRows;
    }
    /**
     * @return V1betaAudienceRow[]
     */
    public function getAudienceRows()
    {
        return $this->audienceRows;
    }
    /**
     * @param int
     */
    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
    }
    /**
     * @return int
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\AnalyticsData\QueryAudienceExportResponse::class, 'Google\\Site_Kit_Dependencies\\Google_Service_AnalyticsData_QueryAudienceExportResponse');

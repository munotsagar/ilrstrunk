<?php
namespace App\Repository\Report;

use App\Models\Statement;

class ReportRepository implements IReportRepository
{
    /**
     * statement variable to create IStatementRepository $statement object
     * @var IStatementRepository
     */
    protected $report;

    /**
     * ReportRepository constructor.
     * @param Statement $statements
     */
    public function __construct(Statement $statements)
    {
        $this->report = $statements;
    }

    /**
     * Find distinct records with given field name and value
     * @param $distinctField
     * @param $fieldName
     * @param $fieldValue
     * @return mixed
     */
    public function findDistinctBy($distinctField, $fieldName, $fieldValue)
    {
        $reportResult = $this->report->where($fieldName, $fieldValue);
        return $reportResult->distinct($distinctField)->get();
    }

}
<?php
class Employee {
    public $employeeId;
    public $workingHours;
    public $amountPaidPerHour;

    public function __construct($employeeId, $workingHours, $amountPaidPerHour) {
        $this->employeeId = $employeeId;
        $this->workingHours = $workingHours;
        $this->amountPaidPerHour = $amountPaidPerHour;
    }

    public function calculateSalary() {
        $salary = $this->workingHours * $this->amountPaidPerHour;
        return $salary;
    }

    public function display() {
        echo "Employee ID: " . $this->employeeId . "<br>";
        echo "Salary: " . $this->calculateSalary() . "<br>";
    }
}

$employee = new Employee("⭐04", 12, 04);
$employee->display();
?>
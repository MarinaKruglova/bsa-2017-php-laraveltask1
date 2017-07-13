<?php

namespace App\Services;

use App\Repositories\Contracts\Repository;
use App\Services\Contracts\RandomGenerator;
use App\Services\Contracts\CarSharing;

class CarSharingService implements CarSharing
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all cars from repository
     * @return array
     */
    public function getAllCars()
    {
        return $this->repository->all();
    }
    /**
     * Get the random car from repository
     * @return array
     */
    public function getRandomCar()
    {
        $carsCollection = $this->repository->all();
        $randomIndex = app(RandomGenerator::class)->getRandomInt(0, count($carsCollection) - 1);
        return $carsCollection[$randomIndex];
    }
}
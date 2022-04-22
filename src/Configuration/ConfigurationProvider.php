<?php
/**
 * @link            https://tasko.de/ tasko Products GmbH
 * @copyright       (c) tasko Products GmbH 2022
 * @license         tbd
 * @author          Lukas Rotermund <lukas.rotermund@tasko.de>
 * @version         1.0.0
 */

declare(strict_types=1);

namespace TaskoProducts\SymfonyPrometheusExporterBundle\Configuration;

class ConfigurationProvider implements ConfigurationProviderInterface
{
    /**
     * @inheritDoc
     */
    public function config(?string $path = null): array|bool|string|int|float|\UnitEnum|null
    {
        return null;
    }
}

<?php

namespace MartinRo\FilamentSeoMetaTags\Concerns;

trait HasHintColor
{
    public static function getColor($state, $min, $max): string
    {
        if (strlen($state) >= $min) {
            $color = 'success';
        }

        if (strlen($state) > $max) {
            $color = 'danger';
        }

        if (strlen($state) === 0) {
            $color = 'gray';
        } else {
            if (strlen($state) < $min) {
                $color = 'danger';
            }

            if (strlen($state) >= $min) {
                $color = 'success';
            }

            if (strlen($state) > $max) {
                $color = 'danger';
            }
        }

        return $color ?? 'gray';
    }
}

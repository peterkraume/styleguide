<?php

declare(strict_types=1);

namespace TYPO3\CMS\Styleguide\TcaDataGenerator\FieldGenerator;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Styleguide\TcaDataGenerator\FieldGeneratorInterface;

/**
 * Generate data for type=text fields
 */
class TypeTextWizardTable extends AbstractFieldGenerator implements FieldGeneratorInterface
{
    /**
     * @var array General match if type=text
     */
    protected $matchArray = [
        'fieldConfig' => [
            'config' => [
                'type' => 'text',
                'renderType' => 'textTable',
            ],
        ],
    ];

    /**
     * Returns the generated value to be inserted into DB for this field
     *
     * @param array $data
     * @return string
     */
    public function generate(array $data): string
    {
        return 'row1 col1|row1 col2'
            . chr(10) . 'row2 col1|row2 col2'
            . chr(10) . 'row3 col1|row3 col2';
    }
}

<?php

/**
 * @file
 *          This file is part of the PdfParser library.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @date    2013-08-08
 * @license GPL-2.0
 * @url     <https://github.com/smalot/pdfparser>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Smalot\PdfParser\Font;

use Smalot\PdfParser\Font;

/**
 * Class FontType1
 *
 * @package Smalot\PdfParser\Font
 */
class FontType1 extends Font
{
    /**
     * @return bool
     */
    public function isUnicode()
    {
        if ($this->has('Encoding')) {
            if (stripos($this->get('Encoding')->getContent(), 'ansi') !== false) {
                return false;
//            } elseif ($this->get('Encoding')->getContent() == '') {
//                return false;
            }
        }

        return true;
    }
}
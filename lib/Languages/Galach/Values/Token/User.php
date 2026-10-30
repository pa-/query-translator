<?php

namespace QueryTranslator\Languages\Galach\Values\Token;

use QueryTranslator\Languages\Galach\Tokenizer;
use QueryTranslator\Values\Token;

/**
 * User term token.
 *
 * @see \QueryTranslator\Languages\Galach\Tokenizer::TOKEN_TERM
 */
final class User extends Token
{
    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $user;

    /**
     * @param string $lexeme
     * @param int $position
     * @param string $marker
     * @param string $user
     */
    public function __construct(string $lexeme, int $position, string $marker, string $user)
    {
        $this->marker = $marker;
        $this->user = $user;

        parent::__construct(Tokenizer::TOKEN_TERM, $lexeme, $position);
    }
}

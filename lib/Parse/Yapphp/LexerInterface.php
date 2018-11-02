<?php
/**
 * @author    Oliver Schieche <oliver.schieche@check24.de>
 * @copyright 2018 CHECK24 Vergleichsportal Flüge GmbH
 */
//------------------------------------------------------------------------------
/*<<$namespace>>*//**
 * Interface LexerInterface
 */
interface LexerInterface
{
    /**
     * @param <<$driverclass>> $parser
     * @return array
     */
    public function lex(/*<<$driverclass>>*/ $parser): array;
}

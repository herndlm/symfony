<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Bridge\MicrosoftTeams\Action\Element;

/**
 * @author Edouard Lescot <edouard.lescot@gmail.com>
 * @author Oskar Stark <oskarstark@googlemail.com>
 *
 * @see https://docs.microsoft.com/en-us/outlook/actionable-messages/message-card-reference#header
 */
final class Header
{
    private $options = [];

    /**
     * @return $this
     */
    public function name(string $name): self
    {
        $this->options['name'] = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function value(string $value): self
    {
        $this->options['value'] = $value;

        return $this;
    }

    public function toArray(): array
    {
        return $this->options;
    }
}

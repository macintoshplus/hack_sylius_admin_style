<?php
/**
 * @copyright Macintoshplus (c) 2021
 * Added by : Macintoshplus at 08/10/2021 21:39
 */

declare(strict_types=1);

namespace App\Context;


use Sylius\Bundle\ThemeBundle\Context\ThemeContextInterface;
use Sylius\Bundle\ThemeBundle\Model\ThemeInterface;
use Sylius\Bundle\ThemeBundle\Repository\ThemeRepositoryInterface;

final class ThemeContext implements ThemeContextInterface
{

    /**
     * @var ThemeRepositoryInterface
     */
    private $themeRepository;

    public function __construct(ThemeRepositoryInterface $themeRepository)
    {
        $this->themeRepository = $themeRepository;
    }

    /**
     * @inheritDoc
     */
    public function getTheme(): ?ThemeInterface
    {
        return $this->themeRepository->findOneByName('my/theme');
    }
}

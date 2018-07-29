<?php

namespace JT\PageComposerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CprRow
 *
 * @ORM\Table(name="cpr_row")
 * @ORM\Entity(repositoryClass="JT\PageComposerBundle\Repository\CprRowRepository")
 */
class CprRow
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="padding_top", type="integer", nullable=true)
     */
    private $paddingTop;

    /**
     * @var int
     *
     * @ORM\Column(name="padding_left", type="integer", nullable=true)
     */
    private $paddingLeft;

    /**
     * @var int
     *
     * @ORM\Column(name="padding_bottom", type="integer", nullable=true)
     */
    private $paddingBottom;

    /**
     * @var int
     *
     * @ORM\Column(name="padding_right", type="integer", nullable=true)
     */
    private $paddingRight;

    /**
     * @var string
     *
     * @ORM\Column(name="border_style", type="string", length=20, nullable=true)
     */
    private $borderStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="border_color", type="string", length=10, nullable=true)
     */
    private $borderColor;

    /**
     * @var int
     *
     * @ORM\Column(name="border_size", type="integer", nullable=true)
     */
    private $borderSize;

    /**
     * @var int
     *
     * @ORM\Column(name="border_radius", type="integer", nullable=true)
     */
    private $borderRadius;

    /**
     * @var string
     *
     * @ORM\Column(name="bg_color", type="string", length=10, nullable=true)
     */
    private $bgColor;
	
	
    /**
     * @var string
     *
	 * @ORM\ManyToOne(targetEntity="JT\FileBundle\Entity\File")
     */
    private $bgImg;
	

    /**
     * @var int
     *
     * @ORM\Column(name="page_order", type="integer", nullable=true)
     */
    private $pageOrder;
	
    /**
     * Entity Column
     *
     * @ORM\ManyToMany(targetEntity="CprColumn", cascade="all", orphanRemoval=true)
	 * @ORM\JoinColumn(nullable=true)
     */
    private $column;
	
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set paddingTop
     *
     * @param integer $paddingTop
     *
     * @return CprRow
     */
    public function setPaddingTop($paddingTop)
    {
        $this->paddingTop = $paddingTop;

        return $this;
    }

    /**
     * Get paddingTop
     *
     * @return int
     */
    public function getPaddingTop()
    {
        return $this->paddingTop;
    }

    /**
     * Set paddingLeft
     *
     * @param integer $paddingLeft
     *
     * @return CprRow
     */
    public function setPaddingLeft($paddingLeft)
    {
        $this->paddingLeft = $paddingLeft;

        return $this;
    }

    /**
     * Get paddingLeft
     *
     * @return int
     */
    public function getPaddingLeft()
    {
        return $this->paddingLeft;
    }

    /**
     * Set paddingBottom
     *
     * @param integer $paddingBottom
     *
     * @return CprRow
     */
    public function setPaddingBottom($paddingBottom)
    {
        $this->paddingBottom = $paddingBottom;

        return $this;
    }

    /**
     * Get paddingBottom
     *
     * @return int
     */
    public function getPaddingBottom()
    {
        return $this->paddingBottom;
    }

    /**
     * Set paddingRight
     *
     * @param integer $paddingRight
     *
     * @return CprRow
     */
    public function setPaddingRight($paddingRight)
    {
        $this->paddingRight = $paddingRight;

        return $this;
    }

    /**
     * Get paddingRight
     *
     * @return int
     */
    public function getPaddingRight()
    {
        return $this->paddingRight;
    }

    /**
     * Set borderStyle
     *
     * @param string $borderStyle
     *
     * @return CprRow
     */
    public function setBorderStyle($borderStyle)
    {
        $this->borderStyle = $borderStyle;

        return $this;
    }

    /**
     * Get borderStyle
     *
     * @return string
     */
    public function getBorderStyle()
    {
        return $this->borderStyle;
    }

    /**
     * Set borderColor
     *
     * @param string $borderColor
     *
     * @return CprRow
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    /**
     * Get borderColor
     *
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * Set borderTopSize
     *
     * @param integer $borderTopSize
     *
     * @return CprRow
     */
    public function setBorderTopSize($borderTopSize)
    {
        $this->borderTopSize = $borderTopSize;

        return $this;
    }

    /**
     * Get borderTopSize
     *
     * @return int
     */
    public function getBorderTopSize()
    {
        return $this->borderTopSize;
    }

    /**
     * Set borderLeftSize
     *
     * @param integer $borderLeftSize
     *
     * @return CprRow
     */
    public function setBorderLeftSize($borderLeftSize)
    {
        $this->borderLeftSize = $borderLeftSize;

        return $this;
    }

    /**
     * Get borderLeftSize
     *
     * @return int
     */
    public function getBorderLeftSize()
    {
        return $this->borderLeftSize;
    }

    /**
     * Set borderBottomSize
     *
     * @param integer $borderBottomSize
     *
     * @return CprRow
     */
    public function setBorderBottomSize($borderBottomSize)
    {
        $this->borderBottomSize = $borderBottomSize;

        return $this;
    }

    /**
     * Get borderBottomSize
     *
     * @return int
     */
    public function getBorderBottomSize()
    {
        return $this->borderBottomSize;
    }

    /**
     * Set borderRightSize
     *
     * @param integer $borderRightSize
     *
     * @return CprRow
     */
    public function setBorderRightSize($borderRightSize)
    {
        $this->borderRightSize = $borderRightSize;

        return $this;
    }

    /**
     * Get borderRightSize
     *
     * @return int
     */
    public function getBorderRightSize()
    {
        return $this->borderRightSize;
    }

    /**
     * Set radiusTopLeft
     *
     * @param integer $radiusTopLeft
     *
     * @return CprRow
     */
    public function setRadiusTopLeft($radiusTopLeft)
    {
        $this->radiusTopLeft = $radiusTopLeft;

        return $this;
    }

    /**
     * Get radiusTopLeft
     *
     * @return int
     */
    public function getRadiusTopLeft()
    {
        return $this->radiusTopLeft;
    }

    /**
     * Set radiusTopRight
     *
     * @param integer $radiusTopRight
     *
     * @return CprRow
     */
    public function setRadiusTopRight($radiusTopRight)
    {
        $this->radiusTopRight = $radiusTopRight;

        return $this;
    }

    /**
     * Get radiusTopRight
     *
     * @return int
     */
    public function getRadiusTopRight()
    {
        return $this->radiusTopRight;
    }

    /**
     * Set radiusBottomLeft
     *
     * @param integer $radiusBottomLeft
     *
     * @return CprRow
     */
    public function setRadiusBottomLeft($radiusBottomLeft)
    {
        $this->radiusBottomLeft = $radiusBottomLeft;

        return $this;
    }

    /**
     * Get radiusBottomLeft
     *
     * @return int
     */
    public function getRadiusBottomLeft()
    {
        return $this->radiusBottomLeft;
    }

    /**
     * Set radiusBottomRight
     *
     * @param integer $radiusBottomRight
     *
     * @return CprRow
     */
    public function setRadiusBottomRight($radiusBottomRight)
    {
        $this->radiusBottomRight = $radiusBottomRight;

        return $this;
    }

    /**
     * Get radiusBottomRight
     *
     * @return int
     */
    public function getRadiusBottomRight()
    {
        return $this->radiusBottomRight;
    }

    /**
     * Set bgColor
     *
     * @param string $bgColor
     *
     * @return CprRow
     */
    public function setBgColor($bgColor)
    {
        $this->bgColor = $bgColor;

        return $this;
    }

    /**
     * Get bgColor
     *
     * @return string
     */
    public function getBgColor()
    {
        return $this->bgColor;
    }

    /**
     * Set pageOrder
     *
     * @param integer $pageOrder
     *
     * @return CprRow
     */
    public function setPageOrder($pageOrder)
    {
        $this->pageOrder = $pageOrder;

        return $this;
    }

    /**
     * Get pageOrder
     *
     * @return int
     */
    public function getPageOrder()
    {
        return $this->pageOrder;
    }
	

    /**
     * Set borderSize
     *
     * @param integer $borderSize
     *
     * @return CprRow
     */
    public function setBorderSize($borderSize)
    {
        $this->borderSize = $borderSize;

        return $this;
    }

    /**
     * Get borderSize
     *
     * @return integer
     */
    public function getBorderSize()
    {
        return $this->borderSize;
    }

    /**
     * Set borderRadius
     *
     * @param integer $borderRadius
     *
     * @return CprRow
     */
    public function setBorderRadius($borderRadius)
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    /**
     * Get borderRadius
     *
     * @return integer
     */
    public function getBorderRadius()
    {
        return $this->borderRadius;
    }

    /**
     * Add column
     *
     * @param \JT\PageComposerBundle\Entity\CprColumn $column
     *
     * @return CprRow
     */
    public function addColumn(\JT\PageComposerBundle\Entity\CprColumn $column)
    {
        $this->column[] = $column;

        return $this;
    }

    /**
     * Remove column
     *
     * @param \JT\PageComposerBundle\Entity\CprColumn $column
     */
    public function removeColumn(\JT\PageComposerBundle\Entity\CprColumn $column)
    {
        $this->column->removeElement($column);
    }

    /**
     * Get column
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColumn()
    {
        return $this->column;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->column = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set bgImg
     *
     * @param \JT\FileBundle\Entity\File $bgImg
     *
     * @return CprRow
     */
    public function setBgImg(\JT\FileBundle\Entity\File $bgImg = null)
    {
        $this->bgImg = $bgImg;

        return $this;
    }

    /**
     * Get bgImg
     *
     * @return \JT\FileBundle\Entity\File
     */
    public function getBgImg()
    {
        return $this->bgImg;
    }
}

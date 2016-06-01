<?

  namespace Test\Xparse\ElementFinder\Dummy;

  use Xparse\ExpressionTranslator\ExpressionTranslatorInterface;

  /**
   *
   */
  class ItemsByClassExpressionTranslator implements ExpressionTranslatorInterface {

    /**
     * Translate expression to xpath
     * Select items only by specific class
     *
     * @param string $expression
     * @return string
     */
    public function convertToXpath($expression) {
      return '//*[@class="'.$expression.'"]';
    }

  }
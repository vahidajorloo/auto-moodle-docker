<?php

class __Mustache_09f981c2a166c7ccb42f9b8244a20c52 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('hasfooterblockregion');
        $buffer .= $this->sectionFa724231fe4d740b1ecec038b794d293($context, $indent, $value);

        return $buffer;
    }

    private function section902028bfeb75d3d3d41abbc8e47e9f54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-footer-left, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-footer-left, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD797ae735ffd6b18d8d6c6d9c641ae54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-footer-middle, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-footer-middle, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47e841c21c2c0082113a1637fb12444c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-footer-middle-2, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-footer-middle-2, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2aed1547f488ee4a0250962c2b75da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-footer-right, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-footer-right, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section856a348d4005d739bcad4699d15c6f21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<div class="row">
									<div class="col-md-3">
										<section data-region="footer-left" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-left, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerleft }}}
											{{{ blocksfooterleft }}}
										</section>
									</div>
									<div class="col-md-3">
										<section data-region="footer-middle" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle }}}
											{{{ blocksfootermiddle }}}
										</section>
									</div>
									<div class="col-md-3">
										<section data-region="footer-middle-2" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle-2, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle2 }}}
											{{{ blocksfootermiddle2 }}}
										</section>
									</div>
									<div class="col-md-3">
										<section data-region="footer-right" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-right, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerright }}}
											{{{ blocksfooterright }}}
										</section>
									</div>
								</div>
							';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '								<div class="row">
';
                $buffer .= $indent . '									<div class="col-md-3">
';
                $buffer .= $indent . '										<section data-region="footer-left" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->section902028bfeb75d3d3d41abbc8e47e9f54($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footerleft'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfooterleft'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '									<div class="col-md-3">
';
                $buffer .= $indent . '										<section data-region="footer-middle" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionD797ae735ffd6b18d8d6c6d9c641ae54($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footermiddle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfootermiddle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '									<div class="col-md-3">
';
                $buffer .= $indent . '										<section data-region="footer-middle-2" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->section47e841c21c2c0082113a1637fb12444c($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footermiddle2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfootermiddle2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '									<div class="col-md-3">
';
                $buffer .= $indent . '										<section data-region="footer-right" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionD2aed1547f488ee4a0250962c2b75da8($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footerright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfooterright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '								</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19d289f7a5cd24ebcf3953530094cb44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<div class="row">
									<div class="col-md-4">
										<section data-region="footer-left" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-left, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerleft }}}
											{{{ blocksfooterleft }}}
										</section>
									</div>
									<div class="col-md-4">
										<section data-region="footer-middle" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle }}}
											{{{ blocksfootermiddle }}}
										</section>
									</div>
									<div class="col-md-4">
										<section data-region="footer-right" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-right, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerright }}}
											{{{ blocksfooterright }}}
										</section>
									</div>
								</div>
							';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '								<div class="row">
';
                $buffer .= $indent . '									<div class="col-md-4">
';
                $buffer .= $indent . '										<section data-region="footer-left" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->section902028bfeb75d3d3d41abbc8e47e9f54($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footerleft'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfooterleft'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '									<div class="col-md-4">
';
                $buffer .= $indent . '										<section data-region="footer-middle" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionD797ae735ffd6b18d8d6c6d9c641ae54($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footermiddle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfootermiddle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '									<div class="col-md-4">
';
                $buffer .= $indent . '										<section data-region="footer-right" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionD2aed1547f488ee4a0250962c2b75da8($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footerright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfooterright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '								</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90a6c57e96cfbb34d8ca77e0b2b1805f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<div class="row">
									<div class="col-md-6">
										<section data-region="footer-left" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-left, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerleft }}}
											{{{ blocksfooterleft }}}
										</section>
									</div>
									<div class="col-md-6">
										<section data-region="footer-right" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-right, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerright }}}
											{{{ blocksfooterright }}}
										</section>
									</div>
								</div>
							';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '								<div class="row">
';
                $buffer .= $indent . '									<div class="col-md-6">
';
                $buffer .= $indent . '										<section data-region="footer-left" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->section902028bfeb75d3d3d41abbc8e47e9f54($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footerleft'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfooterleft'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '									<div class="col-md-6">
';
                $buffer .= $indent . '										<section data-region="footer-right" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionD2aed1547f488ee4a0250962c2b75da8($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footerright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfooterright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '								</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA91330445bb0b63aa13201d3a27a6c17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<div class="row">
									<div class="col-md-12" style="text-align: center;">
										<section data-region="footer-middle" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle }}}
											{{{ blocksfootermiddle }}}
										</section>
									</div>
								</div>
							';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '								<div class="row">
';
                $buffer .= $indent . '									<div class="col-md-12" style="text-align: center;">
';
                $buffer .= $indent . '										<section data-region="footer-middle" class="hidden-print">
';
                $buffer .= $indent . '											<div class="block-pos-desc"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionD797ae735ffd6b18d8d6c6d9c641ae54($context, $indent, $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('addblockbutton_footermiddle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '											';
                $value = $this->resolveValue($context->find('blocksfootermiddle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '										</section>
';
                $buffer .= $indent . '									</div>
';
                $buffer .= $indent . '								</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa724231fe4d740b1ecec038b794d293(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-blocks">
                            <div class="container-fluid">
							{{#has4footerblockcolumns }}
								<div class="row">
									<div class="col-md-3">
										<section data-region="footer-left" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-left, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerleft }}}
											{{{ blocksfooterleft }}}
										</section>
									</div>
									<div class="col-md-3">
										<section data-region="footer-middle" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle }}}
											{{{ blocksfootermiddle }}}
										</section>
									</div>
									<div class="col-md-3">
										<section data-region="footer-middle-2" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle-2, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle2 }}}
											{{{ blocksfootermiddle2 }}}
										</section>
									</div>
									<div class="col-md-3">
										<section data-region="footer-right" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-right, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerright }}}
											{{{ blocksfooterright }}}
										</section>
									</div>
								</div>
							{{/has4footerblockcolumns }}
							
							{{#has3footerblockcolumns }}
								<div class="row">
									<div class="col-md-4">
										<section data-region="footer-left" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-left, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerleft }}}
											{{{ blocksfooterleft }}}
										</section>
									</div>
									<div class="col-md-4">
										<section data-region="footer-middle" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle }}}
											{{{ blocksfootermiddle }}}
										</section>
									</div>
									<div class="col-md-4">
										<section data-region="footer-right" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-right, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerright }}}
											{{{ blocksfooterright }}}
										</section>
									</div>
								</div>
							{{/has3footerblockcolumns }}

							{{#has2footerblockcolumns }}
								<div class="row">
									<div class="col-md-6">
										<section data-region="footer-left" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-left, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerleft }}}
											{{{ blocksfooterleft }}}
										</section>
									</div>
									<div class="col-md-6">
										<section data-region="footer-right" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-right, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footerright }}}
											{{{ blocksfooterright }}}
										</section>
									</div>
								</div>
							{{/has2footerblockcolumns }}
							
							{{#has1footerblockcolumns }}
								<div class="row">
									<div class="col-md-12" style="text-align: center;">
										<section data-region="footer-middle" class="hidden-print">
											<div class="block-pos-desc"><span>{{#str}}region-footer-middle, theme_lambda2{{/str}}</span></div>
											{{{ addblockbutton_footermiddle }}}
											{{{ blocksfootermiddle }}}
										</section>
									</div>
								</div>
							{{/has1footerblockcolumns }}
							
                            </div>
                        </div>
    			';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-blocks">
';
                $buffer .= $indent . '                            <div class="container-fluid">
';
                $value = $context->find('has4footerblockcolumns');
                $buffer .= $this->section856a348d4005d739bcad4699d15c6f21($context, $indent, $value);
                $buffer .= $indent . '							
';
                $value = $context->find('has3footerblockcolumns');
                $buffer .= $this->section19d289f7a5cd24ebcf3953530094cb44($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('has2footerblockcolumns');
                $buffer .= $this->section90a6c57e96cfbb34d8ca77e0b2b1805f($context, $indent, $value);
                $buffer .= $indent . '							
';
                $value = $context->find('has1footerblockcolumns');
                $buffer .= $this->sectionA91330445bb0b63aa13201d3a27a6c17($context, $indent, $value);
                $buffer .= $indent . '							
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

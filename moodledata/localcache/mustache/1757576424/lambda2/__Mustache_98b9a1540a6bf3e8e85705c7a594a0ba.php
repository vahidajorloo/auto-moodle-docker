<?php

class __Mustache_98b9a1540a6bf3e8e85705c7a594a0ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '<div class="wrapper-lambda-outer">
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper-outer">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    
';
        $value = $context->find('haspreblocks');
        $buffer .= $this->section92c20ce821553eef6413e53d3de12be1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<div id="page" data-region="mainpage" data-usertour="scroller" class="';
        $value = $context->find('fp_clean_layout');
        $buffer .= $this->section04b3fba2aff2fb16d1aa2c02b005a9f7($context, $indent, $value);
        $buffer .= 'drawers ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '<div id="page-top"></div>
';
        $buffer .= $indent . '<div class="wrapper-lambda">
';
        $buffer .= $indent . '
';
        $value = $context->find('header_style_0');
        $buffer .= $this->section6b635f05e6367a3be630a358ae49b460($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('header_style_1');
        $buffer .= $this->section1c60cd8dd7ef00ccb6048a7d4e99b030($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('header_style_2');
        $buffer .= $this->section3898a9bf2724fa4131322cdae91f24e2($context, $indent, $value);
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <div class="drawer-toggles d-flex">
';
        $value = $context->find('haspreblocks');
        $buffer .= $this->sectionB7c157e63c64dee1c06791ff41cac368($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="fp-slider-wrapper" class="';
        $value = $context->find('fp_clean_layout');
        if (empty($value)) {
            
            $buffer .= 'fp-slider-outer my-4';
        }
        $value = $context->find('fp_clean_layout');
        $buffer .= $this->sectionEe20650ef0a478c91c77a5560abe53e4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.fp_slideshow'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <div id="page-content" class="row ';
        $value = $context->find('fp_clean_layout');
        $buffer .= $this->sectionB28bf51c519beada87c5a1e7c2190ea7($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="region-main-box" class="col-xs-12 col-12 px-0">
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->sectionAea1dcf61908ed65a5686fd3ba3c1ef9($context, $indent, $value);
        $buffer .= $indent . '            <section id="region-main" class="mx-15">
';
        $buffer .= $indent . '                <div class="card card-block">
';
        $buffer .= $indent . '                    <div id="page-top-blocks">
';
        $buffer .= $indent . '                        <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <div class="block-pos-desc">
';
        $buffer .= $indent . '                                <span>';
        $value = $context->find('str');
        $buffer .= $this->section47e631b2c58889dafae6237ea6c963ed($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('addblockbutton_maintop'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('maintopblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </section>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <div id="page-bottom-blocks">
';
        $buffer .= $indent . '                        <section data-region="blocks-column">
';
        $buffer .= $indent . '                            <div class="block-pos-desc">
';
        $buffer .= $indent . '                                <span>';
        $value = $context->find('str');
        $buffer .= $this->section35f893bcb395d82f94f7e71729970390($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('addblockbutton_mainbottom'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('mainbottomblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </section>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $value = $context->find('is_admin');
        $buffer .= $this->section123786e2837a63f1c94899496b003d9f($context, $indent, $value);
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);

        return $buffer;
    }

    private function section1cb47d3ed9b97c6d6d496d2358bec253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75261dd0e25fae4065259caeda974263(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-side-pre, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-side-pre, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bd0cc4642e36d67e46c9dd550f1fa06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31618380a8d2d407a8b2acf35dd449a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closeblockdrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closeblockdrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92c20ce821553eef6413e53d3de12be1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_boost/drawer }}
            {{$id}}theme_boost-drawers-blocks{{/id}}
            {{$drawerclasses}}drawer drawer-right{{#blockdraweropen}} show{{/blockdraweropen}}{{/drawerclasses}}
            {{$drawercontent}}
                <section class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
                    <div class="block-pos-desc">
                        <span>{{#str}}region-side-pre, theme_lambda2{{/str}}</span>
                    </div>
                    {{{ addblockbutton }}}
                    {{{ sidepreblocks }}}
                </section>
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-block{{/drawerpreferencename}}
            {{$forceopen}}{{#forceblockdraweropen}}1{{/forceblockdraweropen}}{{/forceopen}}
            {{$drawerstate}}show-drawer-right{{/drawerstate}}
            {{$tooltipplacement}}left{{/tooltipplacement}}
            {{$closebuttontext}}{{#str}}closeblockdrawer, core{{/str}}{{/closebuttontext}}
        {{/ theme_boost/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block4ca482bf2f4c0292197ede951a52b02e'),
                        'drawerclasses' => array($this, 'block874d06fc7c30c807dc0ee7226cad4ec8'),
                        'drawercontent' => array($this, 'blockE8c675a784aba2a6792a25b3c8ee1a45'),
                        'drawerpreferencename' => array($this, 'block59146569a56c3d2642fa2e8224817be0'),
                        'forceopen' => array($this, 'block13847ba3219919ecdb2378620735177c'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'blockC945de95615645c65d6b2f192042e6ea'),
                        'closebuttontext' => array($this, 'blockC879444321d250421c3438099ae68173'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04b3fba2aff2fb16d1aa2c02b005a9f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'bg-white ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'bg-white ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b635f05e6367a3be630a358ae49b460(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	    {{>theme_lambda2/includes/header_style_0}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/header_style_0')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c60cd8dd7ef00ccb6048a7d4e99b030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	    {{>theme_lambda2/includes/header_style_1}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/header_style_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3898a9bf2724fa4131322cdae91f24e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	    {{>theme_lambda2/includes/header_style_2}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/header_style_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245ba37b5a58f162a63e0d10700eb739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerblocks, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerblocks, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bf870995ed49a0bb4a766ed18e0f142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD277bad9387573c58f79f77fc705e8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer_rtl, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer_rtl, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7c157e63c64dee1c06791ff41cac368(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
                <button
                    class="btn icon-no-margin"
                    data-toggler="drawers"
                    data-action="toggle"
                    data-target="theme_boost-drawers-blocks"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="{{#str}}opendrawerblocks, core{{/str}}"
                >
                    <span class="sr-only">{{#str}}opendrawerblocks, core{{/str}}</span>
                    <span class="dir-rtl-hide">{{#pix}}t/blocks_drawer, core{{/pix}}</span>
                    <span class="dir-ltr-hide">{{#pix}}t/blocks_drawer_rtl, core{{/pix}}</span>
                </button>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
';
                $buffer .= $indent . '                <button
';
                $buffer .= $indent . '                    class="btn icon-no-margin"
';
                $buffer .= $indent . '                    data-toggler="drawers"
';
                $buffer .= $indent . '                    data-action="toggle"
';
                $buffer .= $indent . '                    data-target="theme_boost-drawers-blocks"
';
                $buffer .= $indent . '                    data-toggle="tooltip"
';
                $buffer .= $indent . '                    data-placement="right"
';
                $buffer .= $indent . '                    title="';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section0bf870995ed49a0bb4a766ed18e0f142($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionD277bad9387573c58f79f77fc705e8dd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe20650ef0a478c91c77a5560abe53e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mb-4 pb-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mb-4 pb-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB28bf51c519beada87c5a1e7c2190ea7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'border-0';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'border-0';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAea1dcf61908ed65a5686fd3ba3c1ef9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="secondary-navigation">
                    {{> core/moremenu}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="secondary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47e631b2c58889dafae6237ea6c963ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-main-top, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-main-top, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f893bcb395d82f94f7e71729970390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-main-bottom, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-main-bottom, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90abeafa80da254804116bc22b00cb0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-admin-only, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-admin-only, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB26463855d1f922fa993c5d2aa637093(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'region-admin-only-heading, theme_lambda2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'region-admin-only-heading, theme_lambda2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section123786e2837a63f1c94899496b003d9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <section class="fp-admin-blocks d-print-none" aria-label="{{#str}}blocks{{/str}}">
                        <div class="admin-blocks block-pos-desc">
                            <span>{{#str}}region-admin-only, theme_lambda2{{/str}}</span>
                        </div>
                        <div class="admin-blocks-inner">
                            <h4>{{#str}}region-admin-only-heading, theme_lambda2{{/str}}</h4>
                            {{{ addblockbutton_adminonly }}}
                            {{{ adminblocks }}}
                        </div>
                    </section>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <section class="fp-admin-blocks d-print-none" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="admin-blocks block-pos-desc">
';
                $buffer .= $indent . '                            <span>';
                $value = $context->find('str');
                $buffer .= $this->section90abeafa80da254804116bc22b00cb0e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="admin-blocks-inner">
';
                $buffer .= $indent . '                            <h4>';
                $value = $context->find('str');
                $buffer .= $this->sectionB26463855d1f922fa993c5d2aa637093($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('addblockbutton_adminonly'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('adminblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block4ca482bf2f4c0292197ede951a52b02e($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-blocks';
    
        return $buffer;
    }

    public function block874d06fc7c30c807dc0ee7226cad4ec8($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section1cb47d3ed9b97c6d6d496d2358bec253($context, $indent, $value);
    
        return $buffer;
    }

    public function blockE8c675a784aba2a6792a25b3c8ee1a45($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <div class="block-pos-desc">
';
        $buffer .= $indent . '                        <span>';
        $value = $context->find('str');
        $buffer .= $this->section75261dd0e25fae4065259caeda974263($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
    
        return $buffer;
    }

    public function block59146569a56c3d2642fa2e8224817be0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-block';
    
        return $buffer;
    }

    public function block13847ba3219919ecdb2378620735177c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('forceblockdraweropen');
        $buffer .= $this->section1bd0cc4642e36d67e46c9dd550f1fa06($context, $indent, $value);
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function blockC945de95615645c65d6b2f192042e6ea($context)
    {
        $indent = $buffer = '';
        $buffer .= 'left';
    
        return $buffer;
    }

    public function blockC879444321d250421c3438099ae68173($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section31618380a8d2d407a8b2acf35dd449a4($context, $indent, $value);
    
        return $buffer;
    }
}

<?php
/*
 * Copyright (c) 2013 Algolia
 * http://www.algolia.com/
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 *
 */

require_once __DIR__.'/AlgoliaException.php';
require_once __DIR__.'/AlgoliaConnectionException.php';
require_once __DIR__.'/Analytics.php';
require_once __DIR__.'/Client.php';
require_once __DIR__.'/ClientContext.php';
require_once __DIR__.'/FailingHostsCache.php';
require_once __DIR__.'/FileFailingHostsCache.php';
require_once __DIR__.'/Index.php';
require_once __DIR__.'/IndexBrowser.php';
require_once __DIR__.'/InMemoryFailingHostsCache.php';
require_once __DIR__.'/Json.php';
require_once __DIR__.'/PlacesIndex.php';
require_once __DIR__.'/SynonymType.php';
require_once __DIR__.'/Version.php';
require_once __DIR__.'/Iterators/AlgoliaIterator.php';
require_once __DIR__.'/Iterators/RuleIterator.php';
require_once __DIR__.'/Iterators/SynonymIterator.php';

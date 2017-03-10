<p>
Writing code can be tricky. Some say that there is no non-trivial code that is completely error-free. Errors happen, and they happen frequently. Preventing, finding, and fixing errors (also known as <em>bugs</em>) in code are valuable skills for programmers to master. This chapter will cover three types of errors (syntax, semantic, and design) and discuss actions that programmers can take to prevent and fix these kinds of errors.
</p>

<h2>Syntax Errors</h2>

<p>
Syntax errors occur when the computer can't understand the code. It looks at the code, tries to make sense of it (i.e. tries to translate it into binary), but can't. This happens when the programmer doesn't stricly follow the rules of the programming language. Perhpas there was a typo or some misunderstanding of the language's syntax rules. Here are a few things you can do to prevent, find, and fix these errors:
</p>

<ul>
	<li><strong>Use a text editor with syntax highlighting</strong> - The Python editor that is featured in this textbook uses syntax highlighting. Keywords like <code>def</code>, <code>if</code>, and <code>print</code> show up in blue. Booleans are yellow. Strings are purple. Syntax highlighting helps you to prevent and find syntax errors. If something isn't the color you expect it to be, then there must be a syntax issue.</li>
	<li><strong>Run the code</strong> - When you try running code that has syntax errors, the output will often give you some kind of error message that you can use to find the error. These error messages aren't perfect and can sometimes be misleading, but they can often help you to know where to look to find syntax errors in your code.</li>
	<li><strong>Know the language</strong> - There is no replacement for spending time practicing and getting familiar with a programming language. The more you use a programming language, the more you know it, and you'll make fewer syntax errors as you become more and more accustomed to the syntax rules. Refer to the documentation for the programming language as you're learning to clear up your personal misunderstandings.</li>
</ul>

<p>
Each of the six test functions in the exercise below has a syntax error. Run the code, read the error message from the output, and find and fix the errors.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		deff test1():
			print("test 1 passed")

		def test2(message]:
			print("test 2 passed: " + message)

		def test3(message):
			prnit("test 3 passed: " + message)

		def test4()
			print("test 4 passed")

		def test5():
		print("test 5 passed")

		def test6(message):
			print("test 6 passed: " + message(0:4))

		# tests, don't change these
		test1()
		test2("success")
		test3("way to go!")
		test4()
		test5()
		test6("yay!!!!!")
	</code>
	<code data-type="solution">
		def test1():
			print("test 1 passed")

		def test2(message):
			print("test 2 passed: " + message)

		def test3(message):
			print("test 3 passed: " + message)

		def test4():
			print("test 4 passed")

		def test5():
			print("test 5 passed")

		def test6(message):
			print("test 6 passed: " + message[0:4])

		# tests, don't change these
		test1()
		test2("success")
		test3("way to go!")
		test4()
		test5()
		test6("yay!!!!!")
	</code>
	<code data-type="sct">
		test_output_contains("test 1 passed\ntest 2 passed: success\ntest 3 passed: way to go!\ntest 4 passed\ntest 5 passed\ntest 6 passed: yay!")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		Look at spellings, colons, brackets, and tabs
	</div>
</div>

<h2>Semantic Errors</h2>

TODO

<h2>Design Errors</h2>

TODO

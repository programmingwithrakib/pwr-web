$(document).ready(function(){
    $('#markdown table').addClass('table table-bordered table-responsive');
    $('#markdown table thead').addClass('bg-light')
})


function markDown(){
    // Wrap each <pre><code> block with a container and add a Copy Button
    document.querySelectorAll('#markdown pre').forEach((block) => {
        // Create a wrapper div
        const wrapper = document.createElement('div');
        wrapper.className = 'code-container';

        // Create the Copy Button
        const button = document.createElement('button');
        button.className = 'copy-button';
        button.innerHTML = "<i class='bi bi-copy'></i>";

        // Move the <pre> block inside the wrapper
        block.parentNode.insertBefore(wrapper, block);
        wrapper.appendChild(block);

        // Add the Copy Button to the wrapper
        wrapper.appendChild(button);

        // Add Copy Functionality
        button.addEventListener('click', () => {
            const codeText = block.querySelector('#markdown code').innerText;

            // Copy the code to clipboard
            navigator.clipboard.writeText(codeText).then(() => {
                button.textContent = 'Copied!';
                setTimeout(() => (button.innerHTML = "<i class='bi bi-copy'></i>"), 2000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    });

    document.querySelectorAll('#markdown pre code').forEach((block) => {
        hljs.highlightElement(block);
    });
}


function findEnglishDigitToBangla(){
    // Mapping of English digits to Bangla digits
    const englishToBanglaDigits = {
        '0': '০',
        '1': '১',
        '2': '২',
        '3': '৩',
        '4': '৪',
        '5': '৫',
        '6': '৬',
        '7': '৭',
        '8': '৮',
        '9': '৯',
    };

    // Function to convert English digits to Bangla digits
    function convertToBanglaDigits(text) {
        return text.replace(/\d/g, (digit) => englishToBanglaDigits[digit]);
    }


    $(document).ready(function (){
        $('h3').each(function (index, item){
            // const contentElement = document.querySelector('h3');
            const originalText = item.textContent;
            const convertedText = convertToBanglaDigits(originalText);

            // Update the content with Bangla digits
            item.textContent = convertedText;
        })
    })

}

findEnglishDigitToBangla()

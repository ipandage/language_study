/* print1.c-displays some properties of printf() */
#include <stdio.h>
int main(void)
{
    int ten = 10;
    int two = 2;
    
    printf("Doing it right: ");
    printf("%d minus %d is %d\n", ten, 2, ten - two );
    printf("Doing it wrong: ");

    // 使用printf() 函数时，格式说明符要和显示的值数目 一定要 相同
    printf("%d minus %d is %d\n", ten );  // forgot 2 arguments

    return 0;
}

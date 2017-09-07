/*
   #include 是C预处理指令 C在编译前要对源代码做一些准备工作，称为预处理
   stdio.h 作为所有C编译包的一部分提供，包含了有关输入和输出的函数的信息已供编译器使用
   头文件指引编译器把代码正确的组合在一起
*/
#include <stdio.h>            /* 对输入和显示输出提供支持             */

/*
   main 函数是C程序的基本模块
*/
int main(void)                /* a simple program             */
{
    int num;                  /* define a variable called num */
    num = 1;                  /* assign a value to num        */

    printf("I am a simple "); /* use the printf() function    */
    /* \n 在下一行的最左面新启一行   */
    printf("computer.\n");

    /*
        %d 是占位符 启作用是指出输出num值的位置
        % 告诉程序把一个变量在这个位置输出 d告诉程序将输出一个十进制（以10为基数）整数变量
    */
    printf("My favorite number is %d because it is first.\n",num);

    /*
        如果return 0 忽略  大多数编译系统将会有警告
    */
    return 0;
}

/*
    标准的C程序 应该使用下面的格式：
    #include<stdio.h>
    int main(void)
    {
        statements
        return 0;
    }
*/



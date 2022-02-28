# php-designmodel

# PHP 设计模式系列



------

### **1、设计模式概述**

在软件工程中，设计模式（Design Pattern）是对软件设计中普遍存在（反复出现）的各种问题，所提出的解决方案。这个术语是由埃里希·伽玛（Erich Gamma）等人在1990年代从建筑设计领域引入到计算机科学的。

设计模式并不直接用来完成代码的编写，而是描述在各种不同情况下，要怎么解决问题的一种方案。面向对象设计模式通常以类或对象来描述其中的关系和相互作用，但不涉及用来完成应用程序的特定类或对象。设计模式能使不稳定依赖于相对稳定、具体依赖于相对抽象，避免会引起麻烦的紧耦合，以增强软件设计面对并适应变化的能力。

并非所有的软件模式都是设计模式，设计模式特指软件“设计”层次上的问题。还有其它非设计模式的模式，如架构模式。同时，算法不能算是一种设计模式，因为算法主要是用来解决计算上的问题，而非设计上的问题。

本系列是常见设计模式的集合以及如何在 PHP 中实现这些设计模式，并为每种模式提供了相应的示例代码。

很多人都知道设计模式，但并非都了解如何在具体应用中实现，基于此我们推出了这一系列教程。

### **2、常用设计模式大全**

设计模式可以按照结构被分成三种不同的类型：

#### **2.1 创建型**

在软件工程中，创建型设计模式用于处理对象的实例化：

- [抽象工厂模式（Abstract Factory）](https://laravelacademy.org/post/2471.html)
- [建造者模式（Builder）](https://laravelacademy.org/post/2489.html)
- [工厂方法模式（Factory Method）](https://laravelacademy.org/post/2506.html)
- [多例模式（Multiton）](https://laravelacademy.org/post/2519.html)
- [对象池模式（Pool）](https://laravelacademy.org/post/2532.html)
- [原型模式（Prototype）](https://laravelacademy.org/post/2546.html)
- [简单工厂模式（Simple Factory）](https://laravelacademy.org/post/2643.html)
- [单例模式（Singleton）](https://laravelacademy.org/post/2599.html)
- [静态工厂模式（Static Factory）](https://laravelacademy.org/post/2647.html)

#### **2.2 结构型**

结构型设计模式用于处理类和对象的组合：

- [适配器模式（Adapter）](https://laravelacademy.org/post/2660.html)
- [桥梁模式（Bridge）](https://laravelacademy.org/post/2680.html)
- [组合模式（Composite）](https://laravelacademy.org/post/2699.html)
- [数据映射模式（Data Mapper）](https://laravelacademy.org/post/2739.html)
- [装饰模式（Decorator）](https://laravelacademy.org/post/2760.html)
- [依赖注入模式（Dependency Injection）](https://laravelacademy.org/post/2792.html)
- [门面模式（Facade）](https://laravelacademy.org/post/2807.html)
- [流接口模式（Fluent Interface）](https://laravelacademy.org/post/2828.html)
- [代理模式（Proxy）](https://laravelacademy.org/post/2841.html)
- [注册模式（Registry）](https://laravelacademy.org/post/2850.html)

#### **2.3 行为型**

行为型设计模式用于处理类的对象间通信：

- [责任链模式（Chain Of Responsibilities）](https://laravelacademy.org/post/2858.html)
- [命令行模式（Command）](https://laravelacademy.org/post/2871.html)
- [迭代器模式（Iterator）](https://laravelacademy.org/post/2882.html)
- [中介者模式（Mediator）](https://laravelacademy.org/post/2894.html)
- [备忘录模式（Memento）](https://laravelacademy.org/post/2903.html)
- [空对象模式（Null Object）](https://laravelacademy.org/post/2912.html)
- [观察者模式（Observer）](https://laravelacademy.org/post/2935.html)
- [规格模式（Specification）](https://laravelacademy.org/post/2960.html)
- [状态模式（State）](https://laravelacademy.org/post/2971.html)
- [策略模式（Strategy）](https://laravelacademy.org/post/2990.html)
- [模板方法模式（Template Method）](https://laravelacademy.org/post/3006.html)
- [访问者模式（Visitor）](https://laravelacademy.org/post/3024.html)

#### **2.4 其它**

- [委托模式（Delegation）](https://laravelacademy.org/post/3038.html)
- [服务定位器模式（Service Locator）](https://laravelacademy.org/post/2820.html)
- [资源库模式（Repository）](https://laravelacademy.org/post/3053.html)